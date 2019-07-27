<?php

namespace Snapchat\API\Request;

use Snapchat\Crypto\StoryCrypto;
use Snapchat\SnapchatClient;

class AuthStoryBlobRequest extends AuthenticatedBaseRequest
{
    private $mediaKey;
    private $mediaIv;

    /**
     * @param $snapchat SnapchatClient
     * @param $mediaId string Story Media ID
     * @param $mediaKey string Story Media Key
     * @param $mediaIv string Story Media IV
     */
    public function __construct($snapchat, $mediaId, $mediaKey, $mediaIv)
    {

        parent::__construct($snapchat);

        $this->mediaKey = $mediaKey;
        $this->mediaIv = $mediaIv;

        $this->addParam("story_id", $mediaId);

    }

    public function getMethod()
    {
        return self::POST;
    }

    public function getEndpoint()
    {
        return "/bq/auth_story_blob";
    }

    public function getResponseObject()
    {
        return null;
    }

    public function parseResponse()
    {
        return false;
    }

    /**
     * @return object
     * @throws \Exception
     */
    public function execute()
    {
        return StoryCrypto::decryptStory(parent::execute(), $this->mediaKey, $this->mediaIv);
    }
}