<?php

namespace Snapchat\API\Response;

use Snapchat\API\Response\Model\MessagingAuth;

class ConversationAuthTokenResponse extends BaseResponse {

    /**
     * Messaging Auth
     * @var MessagingAuth
     */
    private $messaging_auth;

    /**
     * @return MessagingAuth
     */
    public function getMessagingAuth()
    {
        return $this->messaging_auth;
    }

    /**
     * @param MessagingAuth $messaging_auth
     */
    public function setMessagingAuth($messaging_auth)
    {
        $this->messaging_auth = $messaging_auth;
    }

}