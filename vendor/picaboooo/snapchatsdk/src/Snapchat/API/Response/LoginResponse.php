<?php

namespace Snapchat\API\Response;

class LoginResponse extends BaseResponse
{
    /**
     * Updates Response
     * @var UpdatesResponse
     */
    private $updates_response;

    /**
     * Friends Response
     * @var FriendsResponse
     */
    private $friends_response;

    /**
     * Stories Response
     * @var StoriesResponse
     */
    private $stories_response;

    /**
     * Conversations Response
     * @var Model\Conversation[]
     */
    private $conversations_response;

    /**
     * Messaging Gateway Info
     * @var Model\MessagingGatewayInfo
     */
    private $messaging_gateway_info;

    /**
     * Verification needed
     * @var Model\VerificationNeeded
     */
    private $verification_needed;

    /**
     * Device Token Identifier
     * @var string
     */
    private $dtoken1i;

    /**
     * Device Token Verifier
     * @var string
     */
    private $dtoken1v;

    /**
     * Phone Number
     * @var string
     */
    private $phone_number;

    /**
     * Snap Privacy
     * @var int
     */
    private $snap_p;

    /**
     * Story Privacy
     * @var string
     */
    private $story_privacy;

    /** @var string */
    private $username;

    /** @var bool */
    private $odlv_required;

    /** @var string */
    private $odlv_pre_auth_token;

    /** @var string */
    private $obfuscated_phone;

    /** @var string */
    private $obfuscated_email;

    /** @var bool */
    private $two_fa_needed;

    /** @var string */
    private $pre_auth_token;

    /** @var bool */
    private $is_otp_two_fa_enabled;

    /** @var bool */
    private $is_sms_two_fa_enabled;

    /** @var string */
    private $message_format;

    /**
     * @return UpdatesResponse
     */
    public function getUpdatesResponse()
    {
        return $this->updates_response;
    }

    /**
     * @param UpdatesResponse $updates_response
     */
    public function setUpdatesResponse($updates_response)
    {
        $this->updates_response = $updates_response;
    }

    /**
     * @return FriendsResponse
     */
    public function getFriendsResponse()
    {
        return $this->friends_response;
    }

    /**
     * @param FriendsResponse $friends_response
     */
    public function setFriendsResponse($friends_response)
    {
        $this->friends_response = $friends_response;
    }

    /**
     * @return StoriesResponse
     */
    public function getStoriesResponse()
    {
        return $this->stories_response;
    }

    /**
     * @param StoriesResponse $stories_response
     */
    public function setStoriesResponse($stories_response)
    {
        $this->stories_response = $stories_response;
    }

    /**
     * @return Model\Conversation[]
     */
    public function getConversationsResponse()
    {
        return $this->conversations_response;
    }

    /**
     * @param Model\Conversation[] $conversations_response
     */
    public function setConversationsResponse($conversations_response)
    {
        $this->conversations_response = $conversations_response;
    }

    /**
     * @return Model\MessagingGatewayInfo
     */
    public function getMessagingGatewayInfo()
    {
        return $this->messaging_gateway_info;
    }

    /**
     * @param Model\MessagingGatewayInfo $messaging_gateway_info
     */
    public function setMessagingGatewayInfo($messaging_gateway_info)
    {
        $this->messaging_gateway_info = $messaging_gateway_info;
    }

    /**
     * @return Model\VerificationNeeded
     */
    public function getVerificationNeeded()
    {
        return $this->verification_needed;
    }

    /**
     * @param Model\VerificationNeeded $verification_needed
     */
    public function setVerificationNeeded($verification_needed)
    {
        $this->verification_needed = $verification_needed;
    }

    /**
     * @return string
     */
    public function getDtoken1i()
    {
        return $this->dtoken1i;
    }

    /**
     * @param string $dtoken1i
     */
    public function setDtoken1i($dtoken1i)
    {
        $this->dtoken1i = $dtoken1i;
    }

    /**
     * @return string
     */
    public function getDtoken1v()
    {
        return $this->dtoken1v;
    }

    /**
     * @param string $dtoken1v
     */
    public function setDtoken1v($dtoken1v)
    {
        $this->dtoken1v = $dtoken1v;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * @param string $phone_number
     */
    public function setPhoneNumber($phone_number)
    {
        $this->phone_number = $phone_number;
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
     * @return bool
     */
    public function isOdlvRequired()
    {
        return $this->odlv_required;
    }

    /**
     * @param bool $odlv_required
     */
    public function setOdlvRequired($odlv_required)
    {
        $this->odlv_required = $odlv_required;
    }

    /**
     * @return string
     */
    public function getOdlvPreAuthToken()
    {
        return $this->odlv_pre_auth_token;
    }

    /**
     * @param string $odlv_pre_auth_token
     */
    public function setOdlvPreAuthToken($odlv_pre_auth_token)
    {
        $this->odlv_pre_auth_token = $odlv_pre_auth_token;
    }

    /**
     * @return string
     */
    public function getObfuscatedPhone()
    {
        return $this->obfuscated_phone;
    }

    /**
     * @param string $obfuscated_phone
     */
    public function setObfuscatedPhone($obfuscated_phone)
    {
        $this->obfuscated_phone = $obfuscated_phone;
    }

    /**
     * @return string
     */
    public function getObfuscatedEmail()
    {
        return $this->obfuscated_email;
    }

    /**
     * @param string $obfuscated_email
     */
    public function setObfuscatedEmail($obfuscated_email)
    {
        $this->obfuscated_email = $obfuscated_email;
    }

    /**
     * @return bool
     */
    public function isTwoFaNeeded()
    {
        return $this->two_fa_needed;
    }

    /**
     * @param bool $two_fa_needed
     */
    public function setTwoFaNeeded($two_fa_needed)
    {
        $this->two_fa_needed = $two_fa_needed;
    }

    /**
     * @return string
     */
    public function getPreAuthToken()
    {
        return $this->pre_auth_token;
    }

    /**
     * @param string $pre_auth_token
     */
    public function setPreAuthToken($pre_auth_token)
    {
        $this->pre_auth_token = $pre_auth_token;
    }

    /**
     * @return bool
     */
    public function isIsOtpTwoFaEnabled()
    {
        return $this->is_otp_two_fa_enabled;
    }

    /**
     * @param bool $is_otp_two_fa_enabled
     */
    public function setIsOtpTwoFaEnabled($is_otp_two_fa_enabled)
    {
        $this->is_otp_two_fa_enabled = $is_otp_two_fa_enabled;
    }

    /**
     * @return bool
     */
    public function isIsSmsTwoFaEnabled()
    {
        return $this->is_sms_two_fa_enabled;
    }

    /**
     * @param bool $is_sms_two_fa_enabled
     */
    public function setIsSmsTwoFaEnabled($is_sms_two_fa_enabled)
    {
        $this->is_sms_two_fa_enabled = $is_sms_two_fa_enabled;
    }

    /**
     * @return string
     */
    public function getMessageFormat()
    {
        return $this->message_format;
    }

    /**
     * @param string $message_format
     */
    public function setMessageFormat($message_format)
    {
        $this->message_format = $message_format;
    }
}