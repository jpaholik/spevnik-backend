<?php

namespace Efata\Bundle\SongbookApiBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Efata\Bundle\SongbookApiBundle\Db\DbUpdateException;

/**
 * Class SongbookDbUpdateCommand
 *
 * @author Jan Paholik <jpaholik@gmail.com>
 */
class SongbookDbUpdateCommand extends ContainerAwareCommand
{
    // TODO implement DB update command interface
    protected function configure()
    {
        $this
            ->setName('efata:songbook:db-update')
            ->setDescription('Efata songbook DB update command')
        ;
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return int|null|void
     * @throws DbUpdateException
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(sprintf('[%s] ... started', date('Y-m-d H:i:s')));

        $dbUpdater = $this->getContainer()->get('efata_songbook_api.db.db_updater');
        $dbUpdater->setModuleName('efata-songbook');
        $dbUpdater->setOutput($output);

        $dbUpdater->addSchemaFile(1, '001-default-db-schema.sql');
        $dbUpdater->addDataFile(2, '002-basic-data.sql');
        $dbUpdater->addDataFile(3, '003-add-basic-languages.sql');
        $dbUpdater->addDataFile(4, '004-add-verse-types.sql');
        $dbUpdater->updateDb();

        $output->writeln(sprintf('[%s] ... finished', date('Y-m-d H:i:s')));
    }
}
