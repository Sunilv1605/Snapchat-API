<?php

namespace Snapchat\API\Response;

class ConversationsResponse extends BaseResponse {

    /**
     * Updates Response
     * @var UpdatesResponse
     */
    private $updates_response;

    /**
     * Friends Response
     * @var FriendsResponse
     */
    private $friends_response;

    /**
     * Conversations Response
     * @var Model\Conversation[]
     */
    private $conversations_response;

    /**
     * Messaging Gateway Info
     * @var Model\MessagingGatewayInfo
     */
    private $messaging_gateway_info;

    /**
     * @return UpdatesResponse
     */
    public function getUpdatesResponse()
    {
        return $this->updates_response;
    }

    /**
     * @param UpdatesResponse $updates_response
     */
    public function setUpdatesResponse($updates_response)
    {
        $this->updates_response = $updates_response;
    }

    /**
     * @return FriendsResponse
     */
    public function getFriendsResponse()
    {
        return $this->friends_response;
    }

    /**
     * @param FriendsResponse $friends_response
     */
    public function setFriendsResponse($friends_response)
    {
        $this->friends_response = $friends_response;
    }

    /**
     * @return Model\Conversation[]
     */
    public function getConversationsResponse()
    {
        return $this->conversations_response;
    }

    /**
     * @param Model\Conversation[] $conversations_response
     */
    public function setConversationsResponse($conversations_response)
    {
        $this->conversations_response = $conversations_response;
    }

    /**
     * @return Model\MessagingGatewayInfo
     */
    public function getMessagingGatewayInfo()
    {
        return $this->messaging_gateway_info;
    }

    /**
     * @param Model\MessagingGatewayInfo $messaging_gateway_info
     */
    public function setMessagingGatewayInfo($messaging_gateway_info)
    {
        $this->messaging_gateway_info = $messaging_gateway_info;
    }

}