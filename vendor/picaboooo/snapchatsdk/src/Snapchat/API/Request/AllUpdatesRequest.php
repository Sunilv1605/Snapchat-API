<?php

namespace Snapchat\API\Request;

use Snapchat\API\Response\AllUpdatesResponse;

class AllUpdatesRequest extends AuthenticatedBaseRequest {

    public function getMethod(){
        return self::POST;
    }

    public function getEndpoint(){
        return "/loq/all_updates";
    }

    public function getResponseObject(){
        return new AllUpdatesResponse();
    }

    /**
     * @return AllUpdatesResponse
     * @throws \Exception
     */
    public function execute(){
        return parent::execute();
    }

}