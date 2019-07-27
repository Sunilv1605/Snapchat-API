<?php


namespace Snapchat\API\Framework;

use GuzzleHttp\Client;
use JsonMapper;
use Snapchat\Exceptions\SnapchatException;

abstract class Request
{
    const GET = 0;
    const POST = 1;

    /**
     * Used to send HTTP requests.
     * @var Client
     */
    private $client;

    /**
     * Used for Mapping response Json to Class instances.
     * @var JsonMapper
     */
    public $mapper;

    /**
     * Proxy used for Requests
     * @var string
     */
    private $proxy;

    /**
     * Proxy used for Requests
     * @var bool
     */
    private $verifyPeer = true;

    /**
     * @var array HTTP Headers to send in Request
     */
    private $headers = [];

    /**
     * @var array Parameters to send in Request
     */
    private $params = [];

    /**
     * @var array Files to send in Request
     */
    private $files = [];

    /**
     * @return string Request Method
     */
    public abstract function getMethod();

    /**
     * @return string Request Url
     */
    public abstract function getUrl();

    public function __construct($client)
    {
        $this->client = $client;
        $this->mapper = new JsonMapper();
    }

    /**
     * Set Proxy to be used for Requests
     * @param $proxy string
     */
    public function setProxy($proxy)
    {
        $this->proxy = $proxy;
    }

    /**
     * Enable/Disable SSL Verification of Peer
     * @param $verifyPeer boolean
     */
    public function setVerifyPeer($verifyPeer)
    {
        $this->verifyPeer = $verifyPeer;
    }

    /**
     *
     * Add Header to the Request
     *
     * @param $key string Header Key
     * @param $value string Header Value
     */
    public function addHeader($key, $value)
    {
        $this->headers[$key] = $value;
    }

    /**
     *
     * Add Parameter to the Request
     *
     * @param $key string Parameter Key
     * @param $value string Parameter Value
     */
    public function addParam($key, $value)
    {
        $this->params[$key] = $value;
    }

    /**
     *
     * Add File to the Request
     *
     * @param $key string File Key
     * @param $file RequestFile
     */
    public function addFile($key, $file)
    {
        $this->files[$key] = $file;
    }

    /**
     * @return array Request Headers
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @return array Request Parameters
     */
    public function getParams()
    {
        return $this->params;
    }

    public function clearHeaders()
    {
        return $this->headers = array();
    }

    public function clearParams()
    {
        return $this->params = array();
    }

    /**
     *
     * Execute the Request
     *
     * @return Response The Response
     * @throws \Exception
     */
    public function execute()
    {
        $response = null;
        $options = [
            'verify' => $this->verifyPeer,
            'proxy' => $this->proxy,
            'headers' => $this->getHeaders()
        ];

        switch ($this->getMethod()) {
            case self::GET:
            {
                $response = $this->client->get($this->getUrl(), array_merge($options, [
                    'query' => $this->getParams()
                ]));
                break;
            }

            case self::POST:
            {
                if (sizeof($this->files) != 0) {
                    $options['multipart'] = [];

                    foreach ($this->getParams() as $k => $v) {
                        array_push($options['multipart'], [
                            'name' => $k,
                            'contents' => $v,
                        ]);
                    }

                    foreach ($this->files as $k => $v) {
                        array_push($options['multipart'], [
                            'name' => $v->getName(),
                            'contents' => fopen($v->getPath(), 'r'),
                            'filename' => $v->getName()
                        ]);
                    }
                } else {
                    $options['form_params'] = $this->getParams();
                }

                $response = $this->client->post($this->getUrl(), $options);
                break;
            }

            default:
            {
                throw new SnapchatException("Unsupported Request Method");
            }
        }

        return new Response($response, $response->getBody()->getContents());
    }
}