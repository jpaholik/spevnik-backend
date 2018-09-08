<?php

namespace Efata\Bundle\SongbookApiBundle\Entity;

/**
 * Author
 */
class Author
{
    /**
     * @var integer
     */
    private $idAuthor;

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
    private $songs;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->songs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idAuthor
     *
     * @return integer
     */
    public function getIdAuthor()
    {
        return $this->idAuthor;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Author
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
     * @return Author
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
     * Add song
     *
     * @param Song $song
     *
     * @return Author
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

