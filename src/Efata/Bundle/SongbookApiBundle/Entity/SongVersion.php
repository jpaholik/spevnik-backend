<?php

namespace Efata\Bundle\SongbookApiBundle\Entity;

/**
 * SongVersion
 */
class SongVersion
{
    /**
     * @var integer
     */
    private $idSongVersion;

    /**
     * @var string
     */
    private $title;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $verseOrders;

    /**
     * SongVersion constructor.
     */
    public function __construct()
    {
        $this->verseOrders = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idSongVersion
     *
     * @return integer
     */
    public function getIdSongVersion()
    {
        return $this->idSongVersion;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return SongVersion
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Add verse order
     *
     * @param SongVersionVerseOrder $verseOrder
     *
     * @return SongVersion
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

