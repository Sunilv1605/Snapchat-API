<?php

namespace Snapchat\API\Response;

class DeviceTokenResponse
{
    /**
     * Device Token Identifier
     * @var string
     */
    private $dtoken1i;

    /**
     * Device Token Verifier
     * @var string
     */
    private $dtoken1v;

    /**
     * @return string
     */
    public function getDeviceTokenIdentifier()
    {
        return $this->dtoken1i;
    }

    /**
     * @param string $dtoken1i
     */
    public function setDtoken1i($dtoken1i)
    {
        $this->dtoken1i = $dtoken1i;
    }

    /**
     * @return string
     */
    public function getDeviceTokenVerifier()
    {
        return $this->dtoken1v;
    }

    /**
     * @param string $dtoken1v
     */
    public function setDtoken1v($dtoken1v)
    {
        $this->dtoken1v = $dtoken1v;
    }
}