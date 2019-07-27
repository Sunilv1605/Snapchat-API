<?php

namespace Snapchat\API\Request;

use Snapchat\API\Request\Model\SendMediaPayload;
use Snapchat\SnapchatClient;
use Snapchat\Util\RequestUtil;

class SendMediaRequest extends AuthenticatedBaseRequest
{
    const ENDPOINT_SEND = "/loq/send";
    const ENDPOINT_POST_STORY = "/bq/post_story";
    const ENDPOINT_DOUBLE_POST = "/loq/double_post";

    const ORIENTATION_PORTRAIT = "0";
    const ORIENTATION_LANDSCAPE_RIGHT = "1";
    const ORIENTATION_UPSIDE_DOWN = "2";
    const ORIENTATION_LANDSCAPE_LEFT = "3";

    private $payload;

    /**
     * @param $snapchat SnapchatClient
     * @param $payload SendMediaPayload
     */
    public function __construct($snapchat, $payload)
    {
        parent::__construct($snapchat);

        $this->payload = $payload;

        $this->addParam("time", $payload->time);
        $this->addParam("media_id", $payload->media_id);
        $this->addParam("zipped", $payload->zipped);
        $this->addParam("camera_front_facing", "0");
        $this->addParam("orientation", self::ORIENTATION_PORTRAIT);
        $this->addParam("features_map", "{}");

        if (!empty($payload->recipients)) {
            $this->addParam("recipients", json_encode($payload->recipients));
        }

        if (!empty($payload->recipient_ids)) {
            $this->addParam("recipient_ids", json_encode($payload->recipient_ids));
        }

        if ($payload->set_as_story) {
            $this->addParam("shared_ids", "{}");
            $this->addParam("caption_text_display", "");
            $this->addParam("client_id", $payload->media_id);

            $this->addParam("my_story", "true");
            $this->addParam("type", $payload->type);
            $this->addParam("story_timestamp", RequestUtil::getCurrentMillis() / 1000);

            //todo: Support Video Thumbnails
            //$this->addFile("thumbnail_data", new RequestFile($this->payload->file_thumbnail, "application/octet-stream", "thumbnail_data"));
        }
    }

    public function getMethod()
    {
        return self::POST;
    }

    public function getEndpoint()
    {
        if ($this->payload->set_as_story) {
            if (empty($this->payload->recipients)) {
                return self::ENDPOINT_POST_STORY;
            } else {
                return self::ENDPOINT_DOUBLE_POST;
            }
        }

        return self::ENDPOINT_SEND;
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