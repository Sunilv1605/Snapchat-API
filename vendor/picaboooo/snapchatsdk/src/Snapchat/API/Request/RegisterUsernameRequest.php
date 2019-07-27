<?php

namespace Snapchat\API\Request;

use Snapchat\API\Constants;
use Snapchat\API\Response\RegisterUsernameResponse;
use Snapchat\SnapchatClient;

class RegisterUsernameRequest extends AuthenticatedBaseRequest {

    /**
     * @param $snapchat SnapchatClient
     * @param $username string Username chosen for this Account
     */
    public function __construct($snapchat, $username){

        parent::__construct($snapchat);

        $this->addParam("selected_username", $username);
        $this->addParam("email", $this->snapchat->getUsername());

        $this->addParam("width", Constants::SCREEN_WIDTH_PX);
        $this->addParam("height", Constants::SCREEN_HEIGHT_PX);

    }

    public function getMethod(){
        return self::POST;
    }

    public function getEndpoint(){
        return "/loq/register_username";
    }

    public function getResponseObject(){
        return new RegisterUsernameResponse();
    }

    /**
     * @return RegisterUsernameResponse
     * @throws \Exception
     */
    public function execute(){
        return parent::execute();
    }

}