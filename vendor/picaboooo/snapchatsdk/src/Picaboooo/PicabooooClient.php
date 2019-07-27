<?php


namespace Picaboooo;


use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;
use Snapchat\SnapchatClient;

class PicabooooClient
{
    const BASE_URL = 'https://picaboooo.com/v1/';
    const API_KEY = 'dac6d9c3-0628-455b-abb9-94cc2055f751';

    private $ts;
    private $seq;
    private $snapchat;
    private $client;

    private $proxy;
    private $verifyPeer = true;

    /**
     * @param $snapchat SnapchatClient
     */
    public function __construct($snapchat)
    {
        $this->ts = round(microtime(true) * 1000);
        $this->seq = 0;
        $this->snapchat = $snapchat;
        $this->client = new Client([
            'base_uri' => self::BASE_URL,
            'headers' => [
                'X-API-Key' => self::API_KEY
            ]
        ]);
    }

    public function setProxy($proxy)
    {
        $this->proxy = $proxy;
    }

    public function setVerifyPeer($verifyPeer)
    {
        $this->verifyPeer = $verifyPeer;
    }

    /**
     * @param $username
     * @param $authToken
     * @param $endpoint
     * @return mixed
     * @throws PicabooooException
     */
    public function getAuthenticatedEndpoint($username, $authToken, $endpoint)
    {
        $response = $this->client->post('authenticate', [
            'verify' => $this->verifyPeer,
            'proxy' => $this->proxy,
            'json' => [
                'ts' => $this->ts,
                'seq' => $this->seq,
                'username' => $username,
                'auth_token' => $authToken,
                'endpoint' => $endpoint
            ]
        ]);

        return $this->verifyResponse($response);
    }

    /**
     * @param $username
     * @param $password
     * @param $dtoken1i
     * @param $dtoken1v
     * @param $preAuthToken
     * @param $odlvPreAuthToken
     * @param $otpType
     * @return mixed
     * @throws PicabooooException
     */
    public function getAuthenticatedLogin($username, $password, $dtoken1i, $dtoken1v, $preAuthToken = null, $odlvPreAuthToken = null, $otpType = null)
    {
        if ($preAuthToken == null) {
            $preAuthToken = '';
        }

        if ($odlvPreAuthToken == null) {
            $odlvPreAuthToken = '';
        }

        if ($otpType == null) {
            $otpType = '';
        }

        $response = $this->client->post('login', [
            'json' => [
                'ts' => $this->ts,
                'seq' => $this->seq,
                'username' => $username,
                'password' => $password,
                'dtoken1i' => $dtoken1i,
                'dtoken1v' => $dtoken1v,
                'pre_auth_token' => $preAuthToken,
                'odlv_pre_auth_token' => $odlvPreAuthToken,
                'otp_type' => $otpType
            ]
        ]);

        return $this->verifyResponse($response);
    }

    /**
     * @param $response ResponseInterface
     * @return mixed
     * @throws PicabooooException
     */
    private function verifyResponse($response)
    {
        $status_code = $response->getStatusCode();
        $contents = $response->getBody()->getContents();

        if ($status_code != 200) {
            throw new PicabooooException("Invalid response code ($status_code) from Picaboooo, contents: $contents.");
        }

        $parsed = json_decode($contents, true);

        if (!isset($parsed["seq"])) {
            throw new PicabooooException("Missing seq in picaboooo response.");
        }

        if (!isset($parsed["headers"])) {
            throw new PicabooooException("Missing headers in picaboooo response.");
        }

        if (!isset($parsed["params"])) {
            throw new PicabooooException("Missing params in picaboooo response.");
        }

        $this->seq = intval($parsed['seq']);

        return $parsed;
    }
}