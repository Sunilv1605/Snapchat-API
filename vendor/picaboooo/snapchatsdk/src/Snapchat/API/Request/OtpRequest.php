<?php

namespace Snapchat\API\Request;

use Snapchat\SnapchatClient;

class OtpRequest extends BaseRequest
{
    /**
     * @param $snapchat SnapchatClient
     * @param $username
     * @param $odlvPreAuthToken
     * @param $otpType
     */
    public function __construct($snapchat, $username, $odlvPreAuthToken, $otpType)
    {
        parent::__construct($snapchat);
        $this->addParam("odlv_pre_auth_token", $odlvPreAuthToken);
        $this->addParam("otp_type", $otpType);
        $this->addParam("username", $username);
    }

    public function getMethod()
    {
        return self::POST;
    }

    public function getEndpoint()
    {
        return "/account/odlv/request_otp";
    }

    public function getResponseObject()
    {
        return null;
    }

    public function parseResponse()
    {
        return false;
    }
}