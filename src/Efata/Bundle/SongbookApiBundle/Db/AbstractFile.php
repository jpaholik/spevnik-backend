<?php

namespace Efata\Bundle\SongbookApiBundle\Db;

/**
 * Class AbstractFile
 *
 * @author Jan Paholik <jan.paholik@gmail.com>
 */
class AbstractFile
{
    /**
     * @var string
     */
    protected $fileName;

    /**
     * @var int
     */
    protected $version;

    /**
     * AbstractFile constructor.
     *
     * @param int    $version
     * @param string $fileName
     */
    public function __construct($version, $fileName)
    {
        $this->fileName = $fileName;
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }
}