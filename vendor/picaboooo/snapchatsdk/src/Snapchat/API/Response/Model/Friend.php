<?php

namespace Snapchat\API\Response\Model;

class Friend {

    const TYPE_MUTUAL = 0;
    const TYPE_PENDING = 1;
    const TYPE_BLOCKED = 2;
    const TYPE_DELETED = 3;
    const TYPE_FOLLOWING = 6;

    const DIRECTION_INCOMING = "INCOMING";
    const DIRECTION_OUTGOING = "OUTGOING";

    const ADDED_BY_USERNAME = "ADDED_BY_USERNAME";
    const ADDED_BY_ADDED_ME_BACK = "ADDED_BY_ADDED_ME_BACK";
    const ADDED_BY_QR_CODE = "ADDED_BY_QR_CODE";

    /**
     * User ID
     * @var string
     */
    private $user_id;

    /**
     * Can see Custom Stories
     * @var boolean
     */
    private $can_see_custom_stories;

    /**
     * Direction
     * @var string
     */
    private $direction;

    /**
     * Username
     * @var string
     */
    private $name;

    /**
     * Display Name
     * @var string
     */
    private $display;

    /**
     * Type
     * @var int
     */
    private $type;

    /**
     * Shared Story
     * @var boolean
     */
    private $is_shared_story;

    /**
     * Timestamp
     * @var int
     */
    private $ts;

    /**
     * Reverse Timestamp
     * @var int
     */
    private $reverse_ts;

    /**
     * Friendmoji String
     * @var string
     */
    private $friendmoji_string;

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param string $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return boolean
     */
    public function isCanSeeCustomStories()
    {
        return $this->can_see_custom_stories;
    }

    /**
     * @param boolean $can_see_custom_stories
     */
    public function setCanSeeCustomStories($can_see_custom_stories)
    {
        $this->can_see_custom_stories = $can_see_custom_stories;
    }

    /**
     * @return string
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * @param string $direction
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * @param string $display
     */
    public function setDisplay($display)
    {
        $this->display = $display;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return boolean
     */
    public function isIsSharedStory()
    {
        return $this->is_shared_story;
    }

    /**
     * @param boolean $is_shared_story
     */
    public function setIsSharedStory($is_shared_story)
    {
        $this->is_shared_story = $is_shared_story;
    }

    /**
     * @return int
     */
    public function getTs()
    {
        return $this->ts;
    }

    /**
     * @param int $ts
     */
    public function setTs($ts)
    {
        $this->ts = $ts;
    }

    /**
     * @return int
     */
    public function getReverseTs()
    {
        return $this->reverse_ts;
    }

    /**
     * @param int $reverse_ts
     */
    public function setReverseTs($reverse_ts)
    {
        $this->reverse_ts = $reverse_ts;
    }

    /**
     * @return string
     */
    public function getFriendmojiString()
    {
        return $this->friendmoji_string;
    }

    /**
     * @param string $friendmoji_string
     */
    public function setFriendmojiString($friendmoji_string)
    {
        $this->friendmoji_string = $friendmoji_string;
    }

}