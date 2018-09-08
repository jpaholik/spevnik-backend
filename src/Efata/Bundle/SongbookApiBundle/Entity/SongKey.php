<?php

namespace Efata\Bundle\SongbookApiBundle\Entity;

/**
 * SongKey
 */
class SongKey
{
    /**
     * @var integer
     */
    private $idSongKey;

    /**
     * @var string
     */
    private $sign;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $songs;

    /**
     * SongKey constructor.
     */
    public function __construct()
    {
        $this->songs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idSongKey
     *
     * @return integer
     */
    public function getIdSongKey()
    {
        return $this->idSongKey;
    }

    /**
     * Set sign
     *
     * @param string $sign
     *
     * @return SongKey
     */
    public function setSign($sign)
    {
        $this->sign = $sign;

        return $this;
    }

    /**
     * Get sign
     *
     * @return string
     */
    public function getSign()
    {
        return $this->sign;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $songs
     *
     * @return SongKey
     */
    private function setSongs($songs)
    {
        $this->songs = $songs;

        return $this;
    }
}

