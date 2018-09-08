<?php

namespace Efata\Bundle\SongbookApiBundle\Entity;

/**
 * RecordType
 */
class RecordType
{
    /**
     * @var integer
     */
    private $idSongRecordType;

    /**
     * @var string
     */
    private $title;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $records;

    /**
     * SongVerse constructor.
     */
    public function __construct()
    {
        $this->records = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idSongRecordType
     *
     * @return integer
     */
    public function getIdSongRecordType()
    {
        return $this->idSongRecordType;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return RecordType
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
     * Add record
     *
     * @param SongRecord $record
     *
     * @return RecordType
     */
    public function addRecord(SongRecord $record)
    {
        $this->records[] = $record;

        return $this;
    }

    /**
     * Remove record
     *
     * @param SongRecord $record
     */
    public function removeRecord(SongRecord $record)
    {
        $this->records->removeElement($record);
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection|\Doctrine\Common\Collections\Collection
     */
    public function getRecords()
    {
        return $this->records;
    }
}

