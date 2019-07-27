<?php

namespace Snapchat\API\Request;

use Snapchat\API\Response\ConversationResponse;
use Snapchat\SnapchatClient;
use Snapchat\Util\RequestUtil;

class ConversationRequest extends AuthenticatedBaseRequest {

    /**
     * @param $snapchat SnapchatClient
     * @param $username string
     */
    public function __construct($snapchat, $username){

        parent::__construct($snapchat);
        $this->addParam("features_map", "{}");
        $this->addParam("conversation_id", RequestUtil::getConversationID($this->snapchat->getUsername(), $username));

    }

    public function getMethod(){
        return self::POST;
    }

    public function getEndpoint(){
        return "/loq/conversation";
    }

    public function getResponseObject(){
        return new ConversationResponse();
    }

    /**
     * @return ConversationResponse
     * @throws \Exception
     */
    public function execute(){
        return parent::execute();
    }

}