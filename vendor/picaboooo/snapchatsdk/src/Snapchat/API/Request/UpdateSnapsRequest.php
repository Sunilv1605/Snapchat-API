<?php

namespace Snapchat\API\Request;

use Snapchat\SnapchatClient;

class UpdateSnapsRequest extends AuthenticatedBaseRequest {

    private $snapId;
    private $secondsViewedFor;

    private $replayed = false;
    private $screenshot = false;

    /**
     * @param $snapchat SnapchatClient
     * @param $snapId string Snap Id
     * @param $secondsViewedFor int Seconds the Snap was viewed for.
     */
    public function __construct($snapchat, $snapId, $secondsViewedFor = 1){

        parent::__construct($snapchat);

        $this->snapId = $snapId;
        $this->secondsViewedFor = $secondsViewedFor;

        $cachedUpdates = $snapchat->getCachedUpdatesResponse();
        $this->addParam("added_friends_timestamp", $cachedUpdates->getAddedFriendsTimestamp());

    }

    /**
     * Set whether this Snap is being marked as Replayed
     * @param $replayed boolean
     */
    public function setReplayed($replayed){
        $this->replayed = $replayed;
    }

    /**
     * Set whether this Snap is being marked as Screenshot
     * @param $screenshot boolean
     */
    public function setScreenshot($screenshot){
        $this->screenshot = $screenshot;
    }

    public function getMethod(){
        return self::POST;
    }

    public function getEndpoint(){
        return "/bq/update_snaps";
    }

    public function getResponseObject(){
        return null;
    }

    public function parseResponse(){
        return false;
    }

    /**
     * @return object
     * @throws \Exception
     */
    public function execute(){

        $viewed_time = $this->secondsViewedFor * 1000;

        $json = json_encode(array(
            $this->snapId => array(
                "c" => $this->screenshot ? "1" : "0",
                "replayed" => $this->replayed ? "1" : "0",
                "sv" => $viewed_time,
                "t" => time(),
            )
        ));

        $this->addParam("json", $json);

        return parent::execute();

    }

}