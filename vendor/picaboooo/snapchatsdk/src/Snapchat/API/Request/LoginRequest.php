<?php

namespace Snapchat\API\Request;

use Exception;
use JsonMapper_Exception;
use Picaboooo\PicabooooException;
use Snapchat\API\Framework\Request;
use Snapchat\API\Response\LoginResponse;
use Snapchat\Exceptions\SnapchatException;
use Snapchat\SnapchatClient;

class LoginRequest extends Request
{

    private $url;

    private $username;
    private $password;

    private $preAuthToken;
    private $odlvPreAuthToken;
    private $otpType;

    /**
     * Snapchat Instance to Use
     * @var SnapchatClient
     */
    private $snapchat;

    /**
     * LoginRequest constructor.
     * @param $snapchat SnapchatClient
     * @param $username
     * @param $password
     * @param null|string $preAuthToken
     * @param null|string $odlvPreAuthToken
     * @param null|string $otpType
     */
    public function __construct($snapchat, $username, $password, $preAuthToken = null, $odlvPreAuthToken = null, $otpType = null)
    {
        parent::__construct($snapchat->getClient());

        $this->snapchat = $snapchat;

        $this->setProxy($this->snapchat->getProxy());
        $this->setVerifyPeer($this->snapchat->shouldVerifyPeer());

        $this->username = $username;
        $this->password = $password;

        $this->preAuthToken = $preAuthToken;
        $this->odlvPreAuthToken = $odlvPreAuthToken;
        $this->otpType = $otpType;
    }

    public function getMethod()
    {
        return self::POST;
    }

    public function getUrl()
    {
        return $this->url;
    }

    /**
     *
     * Execute the Request
     *
     * @throws PicabooooException
     * @throws JsonMapper_Exception
     * @throws Exception
     * @return LoginResponse
     */
    public function execute()
    {
        $this->clearHeaders();
        $this->clearParams();

        $deviceToken = $this->snapchat->getCachedDeviceToken();
        $requestData = $this->snapchat->getPicaboo()->getAuthenticatedLogin(
            $this->username,
            $this->password,
            $deviceToken->getDeviceTokenIdentifier(),
            $deviceToken->getDeviceTokenVerifier(),
            $this->preAuthToken,
            $this->odlvPreAuthToken,
            $this->otpType);

        $this->url = $requestData["url"];

        foreach ($requestData["headers"] as $key => $value) {
            $this->addHeader($key, $value);
        }

        foreach ($requestData["params"] as $key => $value) {
            $this->addParam($key, $value);
        }

        $response = parent::execute();

        if (!$response->isOK()) {
            throw new SnapchatException(sprintf("[%s] Login Failed!", $response->getCode()));
        }

        return $this->mapper->map(\GuzzleHttp\json_decode($response->getData()), new LoginResponse());
    }
}