<?php

namespace Snapchat\API\Request;

abstract class AuthenticatedBaseRequest extends BaseRequest
{
    public function getUsername()
    {
        return $this->snapchat->getUsername();
    }

    public function getAuthToken()
    {
        return $this->snapchat->getAuthToken();
    }

    public function picabooAuthCallback($endpointEndpointAuth)
    {
        $this->addParam("username", $this->snapchat->getUsername());
    }
}