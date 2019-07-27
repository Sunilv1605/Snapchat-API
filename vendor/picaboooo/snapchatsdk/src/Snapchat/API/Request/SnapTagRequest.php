<?php

namespace Snapchat\API\Request;

use Snapchat\API\Response\SnapTagResponse;

class SnapTagRequest extends AuthenticatedBaseRequest {

    const TYPE_PNG = "PNG";
    const TYPE_SVG = "SVG";

    /**
     * @var boolean
     */
    private $shouldParseResponse;

    /**
     * This will provide a PNG.
     * @param $qrPath string QrPath from UpdatesResponse
     */
    public function getMySnapTag($qrPath){
        $this->addParam("image", $qrPath);
        $this->shouldParseResponse = false;
    }

    /**
     * @param $username string Username to get SnapTag for
     * @param string $type string Image Type.
     */
    public function getSnapTagByUsername($username, $type = self::TYPE_PNG){

        $this->addParam("type", $type);
        $this->addParam("username_snapcode", $username);

        $friend = $this->snapchat->findCachedFriend($username);
        if($friend != null){
            $this->addParam("user_id", $friend->getUserId());
        }

        $this->shouldParseResponse = true;

    }

    public function getMethod(){
        return self::POST;
    }

    public function getEndpoint(){
        return "/bq/snaptag_download";
    }

    public function getResponseObject(){
        return new SnapTagResponse();
    }

    public function parseResponse(){
        return $this->shouldParseResponse;
    }

    /**
     * @return object|SnapTagResponse
     * @throws \Exception
     */
    public function execute(){
        return parent::execute();
    }

}