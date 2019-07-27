<?php

namespace Snapchat\API\Request;

class ClearFeedRequest extends AuthenticatedBaseRequest {

    public function getMethod(){
        return self::POST;
    }

    public function getEndpoint(){
        return "/loq/clear_feed";
    }

    public function getResponseObject(){
        return null;
    }

    public function parseResponse(){
        return false;
    }

}