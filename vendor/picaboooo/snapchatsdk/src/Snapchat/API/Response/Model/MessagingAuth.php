<?php

namespace Snapchat\API\Response\Model;

class MessagingAuth {

    /**
     * Mac
     * @var string
     */
    private $mac;

    /**
     * Payload
     * @var string
     */
    private $payload;

    /**
     * @return string
     */
    public function getMac()
    {
        return $this->mac;
    }

    /**
     * @param string $mac
     */
    public function setMac($mac)
    {
        $this->mac = $mac;
    }

    /**
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @param string $payload
     */
    public function setPayload($payload)
    {
        $this->payload = $payload;
    }

}