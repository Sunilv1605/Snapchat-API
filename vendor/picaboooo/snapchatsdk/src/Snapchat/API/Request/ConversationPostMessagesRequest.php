<?php

namespace Snapchat\API\Request;

use Snapchat\API\Response\Model\ChatMessage;
use Snapchat\SnapchatClient;

class ConversationPostMessagesRequest extends AuthenticatedBaseRequest {

    /**
     * @param $snapchat SnapchatClient
     * @param $messages ChatMessage[] Chat Messages to Send
     */
    public function __construct($snapchat, $messages){

        parent::__construct($snapchat);

        //todo: this doesn't work. (Due to Private Variables)
        $this->addParam("messages", json_encode($messages));

    }

    public function getMethod(){
        return self::POST;
    }

    public function getEndpoint(){
        return "/loq/conversation_post_messages";
    }

    public function getResponseObject(){
        return null;
    }

    public function parseResponse(){
        return false;
    }

}