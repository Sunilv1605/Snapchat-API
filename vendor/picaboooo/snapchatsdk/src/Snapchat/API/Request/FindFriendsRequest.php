<?php

namespace Snapchat\API\Request;

use Snapchat\API\Response\FindFriendsResponse;
use Snapchat\SnapchatClient;

class FindFriendsRequest extends AuthenticatedBaseRequest {

    /**
     * @param $snapchat SnapchatClient
     * @param $country string Country Code. US, NZ, AU etc...
     * @param $query array Array of Names and Numbers to lookup. Format: array("number" => "name"); Maximum of 30 per Request.
     */
    public function __construct($snapchat, $country, $query){

        parent::__construct($snapchat);
        $this->addParam("countryCode", strtoupper($country));
        $this->addParam("numbers", json_encode($query, JSON_FORCE_OBJECT));
        $this->addParam("should_recommend", "false");

    }

    public function getMethod(){
        return self::POST;
    }

    public function getEndpoint(){
        return "/bq/find_friends";
    }

    public function getResponseObject(){
        return new FindFriendsResponse();
    }

    public function interceptResponse($response){

        if($response->getCode() == 304){
            throw new \Exception("You have been temporarily blocked from using Find Friends by Snapchat.");
        }

        return parent::interceptResponse($response);

    }

    /**
     * @return FindFriendsResponse
     * @throws \Exception
     */
    public function execute(){
        return parent::execute();
    }

}