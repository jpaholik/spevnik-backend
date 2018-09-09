<?php

namespace Efata\Bundle\SongbookApiBundle\DataFacade;

use Doctrine\ORM\EntityManager;
use Efata\Bundle\SongbookApiBundle\Entity\Song;
use Efata\Bundle\SongbookApiBundle\Entity\SongTitle;
use Efata\Bundle\SongbookApiBundle\Exception\DataFacadeException;

/**
 * Class SongDataFacade
 * @package Efata\Bundle\SongbookApiBundle\DataFacade
 * @author Jan Paholik <jpaholik@gmail.com>
 */
class SongDataFacade
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    /**
     * SongDataFacade constructor.
     *
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @param string $songSlug
     *
     * @return Song
     * @throws DataFacadeException
     */
    public function getSongBySlug($songSlug)
    {
        return $this->getSongTitleBySlug($songSlug)->getSong();
    }

    /**
     * @param string $songSlug
     *
     * @return SongTitle
     * @throws DataFacadeException
     */
    private function getSongTitleBySlug($songSlug)
    {
        $songTitle = $this->entityManager
            ->getRepository(SongTitle::class)
            ->findOneBy(['slug' => $songSlug]);

        if (null === $songTitle) {
            throw new DataFacadeException(
                sprintf('No song title found by %s slug', $songSlug)
            );
        }

        return $songTitle;
    }
}