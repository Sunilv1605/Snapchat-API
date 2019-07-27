<?php

namespace Snapchat\API\Request;

use Snapchat\SnapchatClient;

class BlobRequest extends AuthenticatedBaseRequest
{
    /**
     * @param $snapchat SnapchatClient
     * @param $id string Snap ID to Download
     */
    public function __construct($snapchat, $id)
    {
        parent::__construct($snapchat);
        $this->addParam("id", $id);
    }

    public function getMethod()
    {
        return self::POST;
    }

    public function getEndpoint()
    {
        return "/bq/blob";
    }

    public function getResponseObject()
    {
        return null;
    }

    public function parseResponse()
    {
        return false;
    }
}