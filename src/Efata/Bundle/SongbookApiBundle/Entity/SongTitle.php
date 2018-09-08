<?php

namespace Efata\Bundle\SongbookApiBundle\Entity;

/**
 * SongTitle
 */
class SongTitle
{
    /**
     * @var integer
     */
    private $idTitle;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var Song
     */
    private $song;

    /**
     * @var Language
     */
    private $language;


    /**
     * Get idTitle
     *
     * @return integer
     */
    public function getIdTitle()
    {
        return $this->idTitle;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return SongTitle
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
     * Set slug
     *
     * @param string $slug
     *
     * @return SongTitle
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set idSong
     *
     * @param Song $song
     *
     * @return SongTitle
     */
    public function setSong(Song $song = null)
    {
        $this->song = $song;

        return $this;
    }

    /**
     * Get idSong
     *
     * @return Song
     */
    public function getSong()
    {
        return $this->song;
    }

    /**
     * Set idLanguage
     *
     * @param Language $language
     *
     * @return SongTitle
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

