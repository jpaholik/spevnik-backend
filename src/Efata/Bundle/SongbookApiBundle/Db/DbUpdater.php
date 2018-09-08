<?php

namespace Efata\Bundle\SongbookApiBundle\Db;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DBALException;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Finder\Finder;

class DbUpdater
{
    /**
     * @var AbstractFile[]
     */
    private $files;

    /**
     * @var string
     */
    private $moduleName;

    /**
     * @var int
     */
    private $lastVersion;

    /**
     * @var string
     */
    private $sqlDir;

    /**
     * @var OutputInterface
     */
    private $output;

    /**
     * DbUpdater constructor.
     *
     * @param Connection $connection
     * @param string     $sqlDir
     */
    public function __construct(Connection $connection, $sqlDir)
    {
        $this->connection = $connection;
        $this->lastVersion = 0;
        $this->sqlDir = $sqlDir;
    }

    /**
     * Update database
     */
    public function updateDb()
    {
        $this->connection->beginTransaction();
        $this->initVersionTable();
        $currentModuleVersion = $this->getCurrentModuleVersion();

        foreach ($this->files as $file) {
            if ($file->getVersion() > $currentModuleVersion) {
                try {
                    $this->executeFile($file);
                    $this->updateModuleVersion($file);
                    $this->output->writeln(sprintf(
                        '[%s] ... %s',
                        $file->getVersion(),
                        $file->getFileName()
                    ));
                } catch (DBALException $exception) {
                    $errorMessage = sprintf(
                        "Error during updating DB - file %s\nDBAL exception message: %s",
                        $file->getFileName(),
                        $exception->getMessage()
                    );

                    $this->connection->rollBack();

                    throw new DbUpdateException($errorMessage);
                }
            }
        }

        $this->connection->commit();
    }

    /**
     * @param int    $version
     * @param string $path
     */
    public function addSchemaFile($version, $path)
    {
        $this->files[] = new SchemaFile($version, $path);
        $this->lastVersion = $version;
    }

    /**
     * @param int    $version
     * @param string $path
     */
    public function addDataFile($version, $path)
    {
        $this->files[] = new DataFile($version, $path);
        $this->lastVersion = $version;
    }

    /**
     * @param string $moduleName
     *
     * @return DbUpdater
     */
    public function setModuleName($moduleName)
    {
        $this->moduleName = $moduleName;

        return $this;
    }

    /**
     * @return string
     */
    public function getModuleName()
    {
        return $this->moduleName;
    }

    /**
     * @return string
     */
    public function getSqlDir()
    {
        return $this->sqlDir;
    }

    /**
     * @param OutputInterface $output
     *
     * @return DbUpdater
     */
    public function setOutput($output)
    {
        $this->output = $output;

        return $this;
    }

    /**
     * @param AbstractFile $file
     *
     * @throws DBALException
     * @throws DbUpdateException
     */
    private function executeFile(AbstractFile $file)
    {
        $finder = new Finder();
        $finder->files()
               ->name($file->getFileName())
               ->in(dirname($this->sqlDir));

        $sql = '';
        foreach ($finder as $file) {
            $sql = $file->getContents();
        }

        if ('' !== $sql) {
            $statement = $this->connection->prepare($sql);
            $statement->execute();
        } else {
            throw new DbUpdateException(sprintf('File %s was not found or is empty.', $file->getFileName()));
        }
    }

    /**
     * Initialize version table if not exists
     */
    private function initVersionTable()
    {
        $sql = 'CREATE TABLE IF NOT EXISTS version (
                  module VARCHAR(128) NOT NULL,
                  version INT(10) UNSIGNED NOT NULL,
                  PRIMARY KEY (module, version),
                  UNIQUE (module)
                );';

        $statement = $this->connection->prepare($sql);
        $statement->execute();
    }

    /**
     * Update version of module
     *
     * @param AbstractFile $file
     */
    private function updateModuleVersion(AbstractFile $file)
    {
        $sql = 'INSERT INTO version (module, version)
                VALUES (:module, :version)
                ON DUPLICATE KEY UPDATE version = :version';

        $statement = $this->connection->prepare($sql);
        $statement->bindValue('module', $this->moduleName);
        $statement->bindValue('version', $file->getVersion());

        $statement->execute();
    }

    /**
     * Get module version
     *
     * @return int
     */
    private function getCurrentModuleVersion()
    {
        $sql = 'SELECT version
                FROM version
                WHERE module = :module
                LIMIT 1';

        $statement = $this->connection->prepare($sql);
        $statement->bindValue('module', $this->moduleName);
        $statement->execute();

        $result = $statement->fetch(\PDO::FETCH_COLUMN);

        if (false === $result) {
            return 0;
        }

        return $result;
    }
}