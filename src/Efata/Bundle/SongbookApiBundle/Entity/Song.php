<?php

namespace Efata\Bundle\SongbookApiBundle\Entity;

/**
 * Song
 */
class Song
{
    /**
     * @var integer
     */
    private $idSong;

    /**
     * @var integer
     */
    private $tempo;

    /**
     * @var integer
     */
    private $version = '1';

    /**
     * @var \DateTime
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     */
    private $modifiedAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     */
    private $publishedAt;

    /**
     * @var SongKey
     */
    private $songKey;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $authors;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $songNotes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tags;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $songTimeSignatures;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $verses;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $titles;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $records;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->authors = new \Doctrine\Common\Collections\ArrayCollection();
        $this->songNotes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
        $this->songTimeSignatures = new \Doctrine\Common\Collections\ArrayCollection();
        $this->verses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->titles = new \Doctrine\Common\Collections\ArrayCollection();
        $this->records = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idSong
     *
     * @return integer
     */
    public function getIdSong()
    {
        return $this->idSong;
    }

    /**
     * Set tempo
     *
     * @param integer $tempo
     *
     * @return Song
     */
    public function setTempo($tempo)
    {
        $this->tempo = $tempo;

        return $this;
    }

    /**
     * Get tempo
     *
     * @return integer
     */
    public function getTempo()
    {
        return $this->tempo;
    }

    /**
     * Set version
     *
     * @param integer $version
     *
     * @return Song
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return integer
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Song
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set modifiedAt
     *
     * @param \DateTime $modifiedAt
     *
     * @return Song
     */
    public function setModifiedAt($modifiedAt)
    {
        $this->modifiedAt = $modifiedAt;

        return $this;
    }

    /**
     * Get modifiedAt
     *
     * @return \DateTime
     */
    public function getModifiedAt()
    {
        return $this->modifiedAt;
    }

    /**
     * Set publishedAt
     *
     * @param \DateTime $publishedAt
     *
     * @return Song
     */
    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;

        return $this;
    }

    /**
     * Get publishedAt
     *
     * @return \DateTime
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * Set songKey
     *
     * @param SongKey $songKey
     *
     * @return Song
     */
    public function setSongKey(SongKey $songKey = null)
    {
        $this->songKey = $songKey;

        return $this;
    }

    /**
     * @return SongKey
     */
    public function getSongKey()
    {
        return $this->songKey;
    }

    /**
     * Add author
     *
     * @param Author $author
     *
     * @return Song
     */
    public function addAuthor(Author $author)
    {
        $this->authors[] = $author;

        return $this;
    }

    /**
     * Remove author
     *
     * @param Author $author
     */
    public function removeAuthor(Author $author)
    {
        $this->authors->removeElement($author);
    }

    /**
     * Get authors
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAuthors()
    {
        return $this->authors;
    }

    /**
     * Add songNote
     *
     * @param SongNote $songNote
     *
     * @return Song
     */
    public function addSongNote(SongNote $songNote)
    {
        $this->songNotes[] = $songNote;

        return $this;
    }

    /**
     * Remove songNote
     *
     * @param SongNote $songNote
     */
    public function removeSongNote(SongNote $songNote)
    {
        $this->songNotes->removeElement($songNote);
    }

    /**
     * Get idSongNote
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSongNotes()
    {
        return $this->songNotes;
    }

    /**
     * Add tag
     *
     * @param Tag $tag
     *
     * @return Song
     */
    public function addTag(Tag $tag)
    {
        $this->tags[] = $tag;

        return $this;
    }

    /**
     * Remove idTag
     *
     * @param Tag $tag
     */
    public function removeTag(Tag $tag)
    {
        $this->tags->removeElement($tag);
    }

    /**
     * Get idTag
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Add songTimeSignature
     *
     * @param SongTimeSignature $songTimeSignature
     *
     * @return Song
     */
    public function addSongTimeSignature(SongTimeSignature $songTimeSignature)
    {
        $this->songTimeSignatures[] = $songTimeSignature;

        return $this;
    }

    /**
     * Remove songTimeSignature
     *
     * @param SongTimeSignature $songTimeSignature
     */
    public function removeSongTimeSignature(SongTimeSignature $songTimeSignature)
    {
        $this->songTimeSignatures->removeElement($songTimeSignature);
    }

    /**
     * Get songTimeSignature
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSongTimeSignatures()
    {
        return $this->songTimeSignatures;
    }

    /**
     * Add verse
     *
     * @param SongVerse $songVerse
     *
     * @return Song
     */
    public function addVerse(SongVerse $songVerse)
    {
        $this->verses[] = $songVerse;

        return $this;
    }

    /**
     * Remove verse
     *
     * @param SongVerse $songVerse
     */
    public function removeVerse(SongVerse $songVerse)
    {
        $this->verses->removeElement($songVerse);
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVerses()
    {
        return $this->verses;
    }

    /**
     * Add title
     *
     * @param SongTitle $title
     *
     * @return Song
     */
    public function addTitle(SongTitle $title)
    {
        $this->titles[] = $title;

        return $this;
    }

    /**
     * Remove title
     *
     * @param SongTitle $title
     */
    public function removeTitle(SongTitle $title)
    {
        $this->titles->removeElement($title);
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTitles()
    {
        return $this->titles;
    }

    /**
     * Add record
     *
     * @param SongRecord $record
     *
     * @return Song
     */
    public function addRecord(SongRecord $record)
    {
        $this->records[] = $record;

        return $this;
    }

    /**
     * Remove title
     *
     * @param SongRecord $record
     */
    public function removeRecord(SongRecord $record)
    {
        $this->records->removeElement($record);
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRecords()
    {
        return $this->records;
    }
}
