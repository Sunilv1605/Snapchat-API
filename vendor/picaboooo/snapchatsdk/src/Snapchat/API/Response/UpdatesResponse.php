<?php

namespace Snapchat\API\Response;

class UpdatesResponse extends BaseResponse {

    /**
     * Birthday
     * @var string
     */
    private $birthday;

    /**
     * Score
     * @var int
     */
    private $score;

    /**
     * Number of Best Friends
     * @var int
     */
    private $number_of_best_friends;

    /**
     * Number of Snaps Sent
     * @var int
     */
    private $sent;

    /**
     * Number of Snaps Received
     * @var int
     */
    private $received;

    /**
     * Logged In
     * @var boolean
     */
    private $logged;

    /**
     * Story Privacy
     * @var string
     */
    private $story_privacy;

    /**
     * Username
     * @var string
     */
    private $username;

    /**
     * User ID
     * @var string
     */
    private $user_id;

    /**
     * Snap Privacy
     * @var int
     */
    private $snap_p;

    /**
     * List of Recent usernames Snaps have been sent to
     * @var string[]
     */
    private $recents;

    /**
     * Added Friends Timestamp
     * @var int
     */
    private $added_friends_timestamp;

    /**
     * Auth Token
     * @var string
     */
    private $auth_token;

    /**
     * Snapcode Path
     * @var string
     */
    private $qr_path;

    /**
     * Current Server Timestamp
     * @var int
     */
    private $current_timestamp;

    /**
     * Email Address
     * @var string
     */
    private $email;

    /**
     * Mobile
     * @var string
     */
    private $mobile;

    /**
     * @return string
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param string $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param int $score
     */
    public function setScore($score)
    {
        $this->score = $score;
    }

    /**
     * @return int
     */
    public function getNumberOfBestFriends()
    {
        return $this->number_of_best_friends;
    }

    /**
     * @param int $number_of_best_friends
     */
    public function setNumberOfBestFriends($number_of_best_friends)
    {
        $this->number_of_best_friends = $number_of_best_friends;
    }

    /**
     * @return int
     */
    public function getSent()
    {
        return $this->sent;
    }

    /**
     * @param int $sent
     */
    public function setSent($sent)
    {
        $this->sent = $sent;
    }

    /**
     * @return int
     */
    public function getReceived()
    {
        return $this->received;
    }

    /**
     * @param int $received
     */
    public function setReceived($received)
    {
        $this->received = $received;
    }

    /**
     * @return boolean
     */
    public function isLogged()
    {
        return $this->logged;
    }

    /**
     * @param boolean $logged
     */
    public function setLogged($logged)
    {
        $this->logged = $logged;
    }

    /**
     * @return string
     */
    public function getStoryPrivacy()
    {
        return $this->story_privacy;
    }

    /**
     * @param string $story_privacy
     */
    public function setStoryPrivacy($story_privacy)
    {
        $this->story_privacy = $story_privacy;
    }

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
     * @return int
     */
    public function getSnapP()
    {
        return $this->snap_p;
    }

    /**
     * @param int $snap_p
     */
    public function setSnapP($snap_p)
    {
        $this->snap_p = $snap_p;
    }

    /**
     * @return string[]
     */
    public function getRecents()
    {
        return $this->recents;
    }

    /**
     * @param string[] $recents
     */
    public function setRecents($recents)
    {
        $this->recents = $recents;
    }

    /**
     * @return int
     */
    public function getAddedFriendsTimestamp()
    {
        return $this->added_friends_timestamp;
    }

    /**
     * @param int $added_friends_timestamp
     */
    public function setAddedFriendsTimestamp($added_friends_timestamp)
    {
        $this->added_friends_timestamp = $added_friends_timestamp;
    }

    /**
     * @return string
     */
    public function getAuthToken()
    {
        return $this->auth_token;
    }

    /**
     * @param string $auth_token
     */
    public function setAuthToken($auth_token)
    {
        $this->auth_token = $auth_token;
    }

    /**
     * @return string
     */
    public function getQrPath()
    {
        return $this->qr_path;
    }

    /**
     * @param string $qr_path
     */
    public function setQrPath($qr_path)
    {
        $this->qr_path = $qr_path;
    }

    /**
     * @return int
     */
    public function getCurrentTimestamp()
    {
        return $this->current_timestamp;
    }

    /**
     * @param int $current_timestamp
     */
    public function setCurrentTimestamp($current_timestamp)
    {
        $this->current_timestamp = $current_timestamp;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

}