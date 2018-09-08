<?php

namespace Efata\Bundle\SongbookApiBundle\Entity;

/**
 * Language
 */
class Language
{
    /**
     * @var integer
     */
    private $idLanguage;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $lyrics;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $titles;

    /**
     * Language constructor.
     */
    public function __construct()
    {
        $this->lyrics = new \Doctrine\Common\Collections\ArrayCollection();
        $this->titles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idLanguage
     *
     * @return integer
     */
    public function getIdLanguage()
    {
        return $this->idLanguage;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Language
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
     * @return Language
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
     * @param \Doctrine\Common\Collections\Collection $lyrics
     *
     * @return Language
     */
    public function setLyrics($lyrics)
    {
        $this->lyrics = $lyrics;

        return $this;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $titles
     *
     * @return Language
     */
    public function setTitles($titles)
    {
        $this->titles = $titles;

        return $this;
    }
}

