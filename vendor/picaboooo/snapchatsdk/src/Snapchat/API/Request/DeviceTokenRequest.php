<?php

namespace Snapchat\API\Request;

use Snapchat\API\Response\DeviceTokenResponse;

class DeviceTokenRequest extends BaseRequest {

    public function getMethod(){
        return self::POST;
    }

    public function getEndpoint(){
        return "/loq/device_id";
    }

    public function getResponseObject(){
        return new DeviceTokenResponse();
    }

    /**
     * @return DeviceTokenResponse
     * @throws \Exception
     */
    public function execute(){
        return parent::execute();
    }

}