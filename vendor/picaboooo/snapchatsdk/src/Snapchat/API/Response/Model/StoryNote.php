<?php

namespace Snapchat\API\Response\Model;

class StoryNote {

    /**
     * Viewer
     * @var string
     */
    private $viewer;

    /**
     * Screenshot the Story
     * @var boolean
     */
    private $screenshotted;

    /**
     * Timestamp
     * @var int
     */
    private $timestamp;

    /**
     * @return string
     */
    public function getViewer()
    {
        return $this->viewer;
    }

    /**
     * @param string $viewer
     */
    public function setViewer($viewer)
    {
        $this->viewer = $viewer;
    }

    /**
     * @return boolean
     */
    public function isScreenshotted()
    {
        return $this->screenshotted;
    }

    /**
     * @param boolean $screenshotted
     */
    public function setScreenshotted($screenshotted)
    {
        $this->screenshotted = $screenshotted;
    }

    /**
     * @return int
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param int $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }

}