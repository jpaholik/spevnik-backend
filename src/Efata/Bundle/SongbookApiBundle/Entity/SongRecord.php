<?php

namespace Efata\Bundle\SongbookApiBundle\Entity;

/**
 * SongRecord
 */
class SongRecord
{
    /**
     * @var integer
     */
    private $idSongRecord;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $note;

    /**
     * @var Song
     */
    private $song;

    /**
     * @var RecordType
     */
    private $recordType;


    /**
     * Get idSongRecord
     *
     * @return integer
     */
    public function getIdSongRecord()
    {
        return $this->idSongRecord;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return SongRecord
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return SongRecord
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
     * Set idSong
     *
     * @param Song $song
     *
     * @return SongRecord
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
     * Set idSongRecordType
     *
     * @param RecordType $recordType
     *
     * @return SongRecord
     */
    public function setRecordType(RecordType $recordType = null)
    {
        $this->recordType = $recordType;

        return $this;
    }

    /**
     * Get idSongRecordType
     *
     * @return RecordType
     */
    public function getRecordType()
    {
        return $this->recordType;
    }
}

