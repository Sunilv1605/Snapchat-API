<?php

namespace Snapchat\API\Request;

class GetCaptchaRequest extends AuthenticatedBaseRequest
{

    public function getMethod()
    {
        return self::POST;
    }

    public function getEndpoint()
    {
        return "/bq/get_captcha";
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