<?php

namespace Efata\Bundle\SongbookApiBundle\DataFacade;

use Doctrine\ORM\EntityManager;
use Efata\Bundle\SongbookApiBundle\Entity\Song;
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
        $song = $this->entityManager
            ->getRepository(Song::class)
            ->findBySlug($songSlug);

        if (null === $song) {
            throw new DataFacadeException(
                printf('No song with ID %s was found', $songSlug)
            );
        }

        return $song;
    }
}