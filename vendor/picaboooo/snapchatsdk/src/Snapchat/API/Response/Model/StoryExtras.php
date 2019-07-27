<?php

namespace Snapchat\API\Response\Model;

class StoryExtras {

    /**
     * View Count
     * @var int
     */
    private $view_count;

    /**
     * Screenshot Count
     * @var int
     */
    private $screenshot_count;

    /**
     * @return int
     */
    public function getViewCount()
    {
        return $this->view_count;
    }

    /**
     * @param int $view_count
     */
    public function setViewCount($view_count)
    {
        $this->view_count = $view_count;
    }

    /**
     * @return int
     */
    public function getScreenshotCount()
    {
        return $this->screenshot_count;
    }

    /**
     * @param int $screenshot_count
     */
    public function setScreenshotCount($screenshot_count)
    {
        $this->screenshot_count = $screenshot_count;
    }

}