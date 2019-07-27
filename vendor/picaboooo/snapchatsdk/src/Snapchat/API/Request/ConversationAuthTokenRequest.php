<?php

namespace Snapchat\API\Request;

use Snapchat\API\Response\ConversationAuthTokenResponse;
use Snapchat\SnapchatClient;

class ConversationAuthTokenRequest extends AuthenticatedBaseRequest {

    /**
     * @param $snapchat SnapchatClient
     * @param $conversationId string Conversation ID
     */
    public function __construct($snapchat, $conversationId){

        parent::__construct($snapchat);
        $this->addParam("conversation_id", $conversationId);

    }

    public function getMethod(){
        return self::POST;
    }

    public function getEndpoint(){
        return "/loq/conversation_auth_token";
    }

    public function getResponseObject(){
        return new ConversationAuthTokenResponse();
    }

    /**
     * @return ConversationAuthTokenResponse
     * @throws \Exception
     */
    public function execute(){
        return parent::execute();
    }

}