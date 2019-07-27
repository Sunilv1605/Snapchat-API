<?php

namespace Snapchat\API\Response\Model;

class MessagingGatewayInfo {

    /**
     * Gateway Server
     * @var string
     */
    private $gateway_server;

    /**
     * Gateway Auth Token
     * @var GatewayAuthToken
     */
    private $gateway_auth_token;

    /**
     * @return string
     */
    public function getGatewayServer()
    {
        return $this->gateway_server;
    }

    /**
     * @param string $gateway_server
     */
    public function setGatewayServer($gateway_server)
    {
        $this->gateway_server = $gateway_server;
    }

    /**
     * @return GatewayAuthToken
     */
    public function getGatewayAuthToken()
    {
        return $this->gateway_auth_token;
    }

    /**
     * @param GatewayAuthToken $gateway_auth_token
     */
    public function setGatewayAuthToken($gateway_auth_token)
    {
        $this->gateway_auth_token = $gateway_auth_token;
    }

}