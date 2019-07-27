<?php

namespace Snapchat\API\Request;

use Exception;
use Snapchat\API\Response\SolveCaptchaResponse;
use Snapchat\SnapchatClient;

class SolveCaptchaRequest extends AuthenticatedBaseRequest
{
    /**
     * @param $snapchat SnapchatClient
     * @param $id string Captcha Id you are Solving
     * @param $solution string The Solution to this Captcha
     */
    public function __construct($snapchat, $id, $solution)
    {
        parent::__construct($snapchat);

        $this->addParam("captcha_id", $id);
        $this->addParam("captcha_solution", $solution);
    }

    public function getMethod()
    {
        return self::POST;
    }

    public function getEndpoint()
    {
        return "/bq/solve_captcha";
    }

    public function getResponseObject()
    {
        return new SolveCaptchaResponse();
    }

    /**
     * @return SolveCaptchaResponse
     * @throws Exception
     */
    public function execute()
    {
        return parent::execute();
    }
}