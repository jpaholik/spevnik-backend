<?php

namespace Efata\Bundle\SongbookApiBundle\Entity;

/**
 * SongVerseType
 */
class SongVerseType
{
    /**
     * @var integer
     */
    private $idSongVerseType;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $slug;


    /**
     * Get idSongVerseType
     *
     * @return integer
     */
    public function getIdSongVerseType()
    {
        return $this->idSongVerseType;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return SongVerseType
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
     * @return SongVerseType
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
}

