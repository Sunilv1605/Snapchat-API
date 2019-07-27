<?php

namespace Snapchat\API\Response;

class StoriesResponse extends BaseResponse {

    /**
     * My Stories
     * @var Model\MyStory[]
     */
    private $my_stories;

    /**
     * Friend Stories
     * @var Model\FriendStories[]
     */
    private $friend_stories;

    /**
     * @return Model\MyStory[]
     */
    public function getMyStories()
    {
        return $this->my_stories;
    }

    /**
     * @param Model\MyStory[] $my_stories
     */
    public function setMyStories($my_stories)
    {
        $this->my_stories = $my_stories;
    }

    /**
     * @return Model\FriendStories[]
     */
    public function getFriendStories()
    {
        return $this->friend_stories;
    }

    /**
     * @param Model\FriendStories[] $friend_stories
     */
    public function setFriendStories($friend_stories)
    {
        $this->friend_stories = $friend_stories;
    }

}