<?php

namespace Snapchat\API\Request;

use Snapchat\SnapchatClient;
use Snapchat\Util\RequestUtil;

class UpdateStoriesRequest extends AuthenticatedBaseRequest {

    private $storyId;

    private $screenshot = false;

    /**
     * @param $snapchat SnapchatClient
     * @param $storyId string Story Id
     */
    public function __construct($snapchat, $storyId){

        parent::__construct($snapchat);
        $this->storyId = $storyId;

    }

    /**
     * Set whether this Story is being marked as Screenshot
     * @param $screenshot boolean
     */
    public function setScreenshot($screenshot){
        $this->screenshot = $screenshot;
    }

    public function getMethod(){
        return self::POST;
    }

    public function getEndpoint(){
        return "/bq/update_stories";
    }

    public function getResponseObject(){
        return null;
    }

    public function parseResponse(){
        return false;
    }

    /**
     * @return object
     * @throws \Exception
     */
    public function execute(){

        $friend_stories = array();

        $friend_stories[] = array(
            "id" => $this->storyId,
            "screenshot_count" => $this->screenshot ? "1" : "0",
            "timestamp" => RequestUtil::getCurrentMillis()
        );

        $this->addParam("friend_stories", json_encode($friend_stories));

        return parent::execute();

    }

}