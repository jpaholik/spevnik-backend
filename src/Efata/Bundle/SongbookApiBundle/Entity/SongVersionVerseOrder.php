<?php

namespace Efata\Bundle\SongbookApiBundle\Entity;

/**
 * SongVersionVerseOrder
 */
class SongVersionVerseOrder
{
    /**
     * @var integer
     */
    private $idSongVersionVerseOrder;

    /**
     * @var integer
     */
    private $order;

    /**
     * @var SongVersion
     */
    private $songVersion;

    /**
     * @var SongVerse
     */
    private $verse;


    /**
     * Get idSongVersionVerseOrder
     *
     * @return integer
     */
    public function getIdSongVersionVerseOrder()
    {
        return $this->idSongVersionVerseOrder;
    }

    /**
     * Set order
     *
     * @param integer $order
     *
     * @return SongVersionVerseOrder
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
     * Set idSongVersion
     *
     * @param SongVersion $songVersion
     *
     * @return SongVersionVerseOrder
     */
    public function setSongVersion(SongVersion $songVersion = null)
    {
        $this->songVersion = $songVersion;

        return $this;
    }

    /**
     * Get idSongVersion
     *
     * @return SongVersion
     */
    public function getSongVersion()
    {
        return $this->songVersion;
    }

    /**
     * Set idVerse
     *
     * @param SongVerse $verse
     *
     * @return SongVersionVerseOrder
     */
    public function setVerse(SongVerse $verse = null)
    {
        $this->verse = $verse;

        return $this;
    }

    /**
     * Get idVerse
     *
     * @return SongVerse
     */
    public function getVerse()
    {
        return $this->verse;
    }
}

