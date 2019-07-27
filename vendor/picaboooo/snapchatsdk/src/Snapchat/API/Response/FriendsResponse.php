<?php

namespace Snapchat\API\Response;

class FriendsResponse extends BaseResponse {

    /**
     * Best Friends
     * @var string[]
     */
    private $bests;

    /**
     * Friends
     * @var Model\Friend[]
     */
    private $friends;

    /**
     * Friends that Added you
     * @var Model\AddedFriend[]
     */
    private $added_friends;

    /**
     * @return string[]
     */
    public function getBests()
    {
        return $this->bests;
    }

    /**
     * @param string[] $bests
     */
    public function setBests($bests)
    {
        $this->bests = $bests;
    }

    /**
     * @return Model\Friend[]
     */
    public function getFriends()
    {
        return $this->friends;
    }

    /**
     * @param Model\Friend[] $friends
     */
    public function setFriends($friends)
    {
        $this->friends = $friends;
    }

    /**
     * @return Model\AddedFriend[]
     */
    public function getAddedFriends()
    {
        return $this->added_friends;
    }

    /**
     * @param Model\AddedFriend[] $added_friends
     */
    public function setAddedFriends($added_friends)
    {
        $this->added_friends = $added_friends;
    }

}