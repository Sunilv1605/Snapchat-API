<?php

namespace Snapchat\API\Request;

use Snapchat\API\Response\PhoneVerifyResponse;

class PhoneVerifyRequest extends AuthenticatedBaseRequest {

    public function updatePhoneNumber($country, $number){

        $this->addParam("action", "updatePhoneNumber");
        $this->addParam("countryCode", strtoupper($country));
        $this->addParam("method", "text");
        $this->addParam("password", $this->snapchat->getUsername());
        $this->addParam("phoneNumber", $number);

    }

    public function updatePhoneNumberWithCall($country, $number){

        $this->addParam("action", "updatePhoneNumberWithCall");
        $this->addParam("countryCode", strtoupper($country));
        $this->addParam("method", "call");
        $this->addParam("password", $this->snapchat->getUsername());
        $this->addParam("phoneNumber", $number);

    }

    public function verifyPhoneNumber($code){

        $this->addParam("action", "verifyPhoneNumber");
        $this->addParam("code", $code);
        $this->addParam("password", $this->snapchat->getUsername());
        $this->addParam("skipConfirmation", true);
        $this->addParam("type", "DEFAULT_TYPE");

    }

    public function getMethod(){
        return self::POST;
    }

    public function getEndpoint(){
        return "/bq/phone_verify";
    }

    public function getResponseObject(){
        return new PhoneVerifyResponse();
    }

    public function picabooAuthCallback($endpointAuth){
        parent::picabooAuthCallback($endpointAuth);

        $params = $endpointAuth["params"];

        $deviceToken = $this->snapchat->getCachedDeviceToken();
        $deviceToken->initDeviceSignatureRegistration($this->snapchat->getUsername(), $this->snapchat->getUsername(), $params["timestamp"], $params["req_token"]);

        $this->addParam("dsig", $deviceToken->getDeviceSignature());
        $this->addParam("dtoken1i", $deviceToken->getDeviceTokenIdentifier());
    }

    /**
     * @return PhoneVerifyResponse
     * @throws \Exception
     */
    public function execute(){
        return parent::execute();
    }

}