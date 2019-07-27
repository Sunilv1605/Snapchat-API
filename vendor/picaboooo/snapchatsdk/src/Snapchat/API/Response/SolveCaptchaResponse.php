<?php

namespace Snapchat\API\Response;

class SolveCaptchaResponse extends BaseResponse
{
    /**
     * @var boolean
     */
    private $find_friends_enabled;

    /**
     * @var boolean
     */
    private $is_reset_password;

    /**
     * @return boolean
     */
    public function isFindFriendsEnabled()
    {
        return $this->find_friends_enabled;
    }

    /**
     * @param boolean $find_friends_enabled
     */
    public function setFindFriendsEnabled($find_friends_enabled)
    {
        $this->find_friends_enabled = $find_friends_enabled;
    }

    /**
     * @return boolean
     */
    public function isIsResetPassword()
    {
        return $this->is_reset_password;
    }

    /**
     * @param boolean $is_reset_password
     */
    public function setIsResetPassword($is_reset_password)
    {
        $this->is_reset_password = $is_reset_password;
    }
}