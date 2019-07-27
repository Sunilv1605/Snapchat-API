<?php

namespace Snapchat\API\Request;

use Snapchat\API\Framework\RequestFile;
use Snapchat\API\Request\Model\UploadMediaPayload;
use Snapchat\SnapchatClient;

class UploadMediaRequest extends AuthenticatedBaseRequest
{
    const TYPE_IMAGE = 0;
    const TYPE_VIDEO = 1;

    private $payload;

    /**
     * @param $snapchat SnapchatClient
     * @param $payload UploadMediaPayload
     */
    public function __construct($snapchat, $payload)
    {
        parent::__construct($snapchat);

        $this->payload = $payload;

        $this->addParam("features_map", "{}");
        $this->addParam("type", $this->payload->type);
        $this->addParam("media_id", $this->payload->media_id);

        $this->addFile("data", new RequestFile($this->payload->file, "application/octet-stream", "data"));
    }

    public function getMethod()
    {
        return self::POST;
    }

    public function getEndpoint()
    {
        return "/bq/upload";
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
     * @return UploadMediaPayload
     * @throws \Exception
     */
    public function execute()
    {
        parent::execute();
        return $this->payload;
    }
}