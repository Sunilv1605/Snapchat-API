<?php

namespace Snapchat\API\Request;

use Snapchat\API\Constants;
use Snapchat\API\Response\StoriesResponse;
use Snapchat\SnapchatClient;

class StoriesRequest extends AuthenticatedBaseRequest {

    /**
     * @param $snapchat SnapchatClient
     */
    public function __construct($snapchat){

        parent::__construct($snapchat);

        $this->addParam("checksum", "");
        $this->addParam("features_map", "{}");
        $this->addParam("screen_width_in", Constants::SCREEN_WIDTH_IN);
        $this->addParam("screen_height_in", Constants::SCREEN_HEIGHT_IN);
        $this->addParam("screen_width_px", Constants::SCREEN_WIDTH_PX);
        $this->addParam("screen_height_px", Constants::SCREEN_HEIGHT_PX);

    }

    public function getMethod(){
        return self::POST;
    }

    public function getEndpoint(){
        return "/bq/stories";
    }

    public function getResponseObject(){
        return new StoriesResponse();
    }

    /**
     * @return StoriesResponse
     * @throws \Exception
     */
    public function execute(){
        return parent::execute();
    }

}