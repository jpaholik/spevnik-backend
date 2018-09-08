<?php

namespace Efata\Bundle\SongbookApiBundle\Entity;

/**
 * SongTimeSignature
 */
class SongTimeSignature
{
    /**
     * @var integer
     */
    private $idSongTimeSignature;

    /**
     * @var integer
     */
    private $upperNumber;

    /**
     * @var integer
     */
    private $lowerNumber;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $songs;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->songs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idSongTimeSignature
     *
     * @return integer
     */
    public function getIdSongTimeSignature()
    {
        return $this->idSongTimeSignature;
    }

    /**
     * Set upperNumber
     *
     * @param integer $upperNumber
     *
     * @return SongTimeSignature
     */
    public function setUpperNumber($upperNumber)
    {
        $this->upperNumber = $upperNumber;

        return $this;
    }

    /**
     * Get upperNumber
     *
     * @return integer
     */
    public function getUpperNumber()
    {
        return $this->upperNumber;
    }

    /**
     * Set lowerNumber
     *
     * @param integer $lowerNumber
     *
     * @return SongTimeSignature
     */
    public function setLowerNumber($lowerNumber)
    {
        $this->lowerNumber = $lowerNumber;

        return $this;
    }

    /**
     * Get lowerNumber
     *
     * @return integer
     */
    public function getLowerNumber()
    {
        return $this->lowerNumber;
    }

    /**
     * Add song
     *
     * @param Song $song
     *
     * @return SongTimeSignature
     */
    public function addSong(Song $song)
    {
        $this->songs[] = $song;

        return $this;
    }

    /**
     * Remove song
     *
     * @param Song $song
     */
    public function removeSong(Song $song)
    {
        $this->songs->removeElement($song);
    }

    /**
     * Get song
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSongs()
    {
        return $this->songs;
    }
}

