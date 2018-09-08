<?php

namespace Efata\Bundle\SongbookApiBundle\Entity;

/**
 * SongVerse
 */
class SongVerse
{
    /**
     * @var integer
     */
    private $idSongVerse;

    /**
     * @var integer
     */
    private $order;

    /**
     * @var Song
     */
    private $song;

    /**
     * @var SongVerseType
     */
    private $type;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $verseOrders;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $lyrics;

    /**
     * SongVerse constructor.
     */
    public function __construct()
    {
        $this->lyrics = new \Doctrine\Common\Collections\ArrayCollection();
        $this->verseOrders = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idSongVerse
     *
     * @return integer
     */
    public function getIdSongVerse()
    {
        return $this->idSongVerse;
    }

    /**
     * Set order
     *
     * @param integer $order
     *
     * @return SongVerse
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return integer
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set song
     *
     * @param Song $song
     *
     * @return SongVerse
     */
    public function setSong(Song $song = null)
    {
        $this->song = $song;

        return $this;
    }

    /**
     * Get song
     *
     * @return Song
     */
    public function getSong()
    {
        return $this->song;
    }

    /**
     * Set idSongVerseType
     *
     * @param SongVerseType $type
     *
     * @return SongVerse
     */
    public function setType(SongVerseType $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get idSongVerseType
     *
     * @return SongVerseType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Add lyrics
     *
     * @param SongVerseLyrics $lyrics
     *
     * @return SongVerse
     */
    public function addVerse(SongVerseLyrics $lyrics)
    {
        $this->lyrics[] = $lyrics;

        return $this;
    }

    /**
     * Remove lyrics
     *
     * @param SongVerseLyrics $lyrics
     */
    public function removeVerse(SongVerseLyrics $lyrics)
    {
        $this->lyrics->removeElement($lyrics);
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLyrics()
    {
        return $this->lyrics;
    }

    /**
     * Add verse order
     *
     * @param SongVersionVerseOrder $verseOrder
     *
     * @return SongVerse
     */
    public function addVerseOrder(SongVersionVerseOrder $verseOrder)
    {
        $this->verseOrders[] = $verseOrder;

        return $this;
    }

    /**
     * Remove verse order
     *
     * @param SongVersionVerseOrder $verseOrder
     */
    public function removeVerseOrder(SongVersionVerseOrder $verseOrder)
    {
        $this->verseOrders->removeElement($verseOrder);
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection|\Doctrine\Common\Collections\Collection
     */
    public function getVerseOrders()
    {
        return $this->verseOrders;
    }
}

