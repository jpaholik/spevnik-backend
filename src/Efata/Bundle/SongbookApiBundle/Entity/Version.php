<?php

namespace Efata\Bundle\SongbookApiBundle\Entity;

/**
 * Version
 */
class Version
{
    /**
     * @var string
     */
    private $module;

    /**
     * @var integer
     */
    private $version;


    /**
     * Set module
     *
     * @param string $module
     *
     * @return Version
     */
    public function setModule($module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return string
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set version
     *
     * @param integer $version
     *
     * @return Version
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
}

