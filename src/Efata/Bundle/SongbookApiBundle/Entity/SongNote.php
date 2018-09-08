<?php

namespace Efata\Bundle\SongbookApiBundle\Entity;

/**
 * SongNote
 */
class SongNote
{
    /**
     * @var integer
     */
    private $idSongNote;

    /**
     * @var string
     */
    private $note;

    // TODO this should probably be only foreign key, not many-to-many relation
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
     * Get idSongNote
     *
     * @return integer
     */
    public function getIdSongNote()
    {
        return $this->idSongNote;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return SongNote
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Add song
     *
     * @param Song $song
     *
     * @return SongNote
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

