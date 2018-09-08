<?php

namespace Efata\Bundle\SongbookApiBundle\Entity;

/**
 * SongVerseLyrics
 */
class SongVerseLyrics
{
    /**
     * @var integer
     */
    private $idSongVerseLyrics;

    /**
     * @var string
     */
    private $lyrics;

    /**
     * @var SongVerse
     */
    private $verse;

    /**
     * @var Language
     */
    private $language;


    /**
     * Get idSongVerseLyrics
     *
     * @return integer
     */
    public function getIdSongVerseLyrics()
    {
        return $this->idSongVerseLyrics;
    }

    /**
     * Set lyrics
     *
     * @param string $lyrics
     *
     * @return SongVerseLyrics
     */
    public function setLyrics($lyrics)
    {
        $this->lyrics = $lyrics;

        return $this;
    }

    /**
     * Get lyrics
     *
     * @return string
     */
    public function getLyrics()
    {
        return $this->lyrics;
    }

    /**
     * Set verse
     *
     * @param SongVerse $verse
     *
     * @return SongVerseLyrics
     */
    public function setVerse(SongVerse $verse = null)
    {
        $this->verse = $verse;

        return $this;
    }

    /**
     * Get verse
     *
     * @return SongVerse
     */
    public function getVerse()
    {
        return $this->verse;
    }

    /**
     * Set idLanguage
     *
     * @param Language $language
     *
     * @return SongVerseLyrics
     */
    public function setLanguage(Language $language = null)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get idLanguage
     *
     * @return Language
     */
    public function getLanguage()
    {
        return $this->language;
    }
}

