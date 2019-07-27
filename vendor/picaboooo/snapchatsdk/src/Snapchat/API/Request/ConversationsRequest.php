<?php

namespace Snapchat\API\Request;

use Snapchat\API\Response\ConversationsResponse;
use Snapchat\SnapchatClient;

class ConversationsRequest extends AuthenticatedBaseRequest {

    /**
     * @param $snapchat SnapchatClient
     * @param $offset string The offset for fetching more Conversations
     */
    public function __construct($snapchat, $offset = null){

        parent::__construct($snapchat);

        $this->addParam("checksums_dict", "");
        $this->addParam("features_map", "{}");

        if(!empty($offset)) {
            $this->addParam("offset", $offset);
        }

    }

    public function getMethod(){
        return self::POST;
    }

    public function getEndpoint(){
        return "/loq/conversations";
    }

    public function getResponseObject(){
        return new ConversationsResponse();
    }

    /**
     * @return ConversationsResponse
     * @throws \Exception
     */
    public function execute(){
        return parent::execute();
    }

}