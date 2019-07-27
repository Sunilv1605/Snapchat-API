<?php

namespace Snapchat\API\Response\Model;

class FriendStories {

    /**
     * Username
     * @var string
     */
    private $username;

    /**
     * Friend Story Containers
     * @var FriendStoryContainer[]
     */
    private $stories;

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return FriendStoryContainer[]
     */
    public function getStories()
    {
        return $this->stories;
    }

    /**
     * @param FriendStoryContainer[] $stories
     */
    public function setStories($stories)
    {
        $this->stories = $stories;
    }

}