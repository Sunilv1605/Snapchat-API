<?php

namespace Snapchat\API\Response\Model;

class FriendStoryContainer {

    /**
     * Story
     * @var Story
     */
    private $story;

    /**
     * Viewed
     * @var boolean
     */
    private $viewed;

    /**
     * @return Story
     */
    public function getStory()
    {
        return $this->story;
    }

    /**
     * @param Story $story
     */
    public function setStory($story)
    {
        $this->story = $story;
    }

    /**
     * @return boolean
     */
    public function isViewed()
    {
        return $this->viewed;
    }

    /**
     * @param boolean $viewed
     */
    public function setViewed($viewed)
    {
        $this->viewed = $viewed;
    }

}