<?php

namespace Snapchat\Crypto;

class DeviceToken
{
    /**
     * @var string Device Token Identifier
     */
    private $dtoken1i;

    /**
     * @var string Device Token Verifier
     */
    private $dtoken1v;

    /**
     * @var string Device Signature
     */
    private $dsig;

    public function __construct($dtoken1i, $dtoken1v)
    {
        $this->dtoken1i = $dtoken1i;
        $this->dtoken1v = $dtoken1v;
    }

    /**
     *
     * Initializes the Device Signature.
     *
     * @param $username string Snapchat Username
     * @param $password string Snapchat Password
     * @param $timestamp string Login Request Timestamp
     * @param $request_token string Login Request Token
     */
    public function initDeviceSignatureRegistration($username, $password, $timestamp, $request_token)
    {
        $data = sprintf("%s|%s|%s|%s", $username, $password, $timestamp, $request_token);
        $this->dsig = substr(hash_hmac("sha256", $data, $this->dtoken1v), 0, 20);
    }

    /**
     * @return string Device Token Identifier
     */
    public function getDeviceTokenIdentifier()
    {
        return $this->dtoken1i;
    }

    /**
     * @return string Device Token Verifier
     */
    public function getDeviceTokenVerifier()
    {
        return $this->dtoken1v;
    }

    /**
     * @return string Device Signature
     */
    public function getDeviceSignature()
    {
        return $this->dsig;
    }

    /**
     * @return string Device Unique ID
     */
    public function getDeviceUniqueID()
    {
        return base64_encode(sha1($this->dtoken1i, true));
    }
}