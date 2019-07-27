<?php

namespace Snapchat\API\Request;

use Exception;
use Snapchat\API\Response\LoginResponse;
use Snapchat\API\Response\RegisterResponse;
use Snapchat\SnapchatClient;

class RegisterRequest extends BaseRequest
{

    private $username;
    private $password;

    /**
     * @param $snapchat SnapchatClient
     * @param $username string Email Address
     * @param $password string Password
     * @param $firstName string First name
     * @param $lastName string Last name
     * @param $birthday string Birthday (format: YYYY-MM-DD)
     * @param $timezone string TimeZone {@link http://php.net/manual/en/timezones.php}
     */
    public function __construct($snapchat, $username, $password, $firstName, $lastName, $birthday, $timezone)
    {
        parent::__construct($snapchat);

        $this->snapchat = $snapchat;

        $this->username = $username;
        $this->password = $password;

        $this->addParam("birthday", $birthday);
        $this->addParam("device_check_token", "DEVICE_CHECK_NOT_SUPPORTED_GTE_IOS11");
        $this->addParam("fidelius_client_init", "");
        $this->addParam("first_name", $firstName);
        $this->addParam("from_deeplink", "false");
        $this->addParam("last_name", $lastName);
        $this->addParam("username", $username);
        $this->addParam("password", $password);
        $this->addParam("study_settings", "{\"CONSOLE_V2_BETA_PP_111\":{\"VARIABLE_5\":\"True\",\"experimentId\":\"78\",\"VARIABLE_1\":\"False\",\"groupId\":\"1\",\"VARIABLE_4\":\"falae\",\"VARIABLE_2\":\"True\"},\"CONSOLE_V2_BETA_PP_109\":{\"VARIABLE_5\":\"True\",\"experimentId\":\"84\",\"VARIABLE_1\":\"False\",\"VARIABLE_6\":\"True\",\"groupId\":\"2\"},\"CONSOLE_V2_BETA_PP_119\":{\"VARIABLE_5\":\"True\",\"experimentId\":\"57\",\"sdfsf\":\"True\",\"groupId\":\"3\",\"VARIABLE_4\":\"True\",\"VARIABLE_2\":\"True\"},\"CONSOLE_V2_BETA_PP_72\":{\"groupId\":\"0\",\"experimentId\":\"4\",\"VARIABLE_1\":\"False\",\"VARIABLE_3\":\"True\",\"VARIABLE_2\":\"True\"},\"CONSOLE_V2_BETA_PP_55\":{\"groupId\":\"3\",\"experimentId\":\"37\",\"VARIABLE_1\":\"True\",\"VARIABLE_2\":\"True\"}}");
        $this->addParam("time_zone", $timezone);
    }

    public function getMethod()
    {
        return self::POST;
    }

    public function getEndpoint()
    {
        return "/loq/register_v2";
    }

    public function getResponseObject()
    {
        return new LoginResponse();
    }

    /**
     * @param object $endpointAuth
     * @throws Exception
     */
    public function picabooAuthCallback($endpointAuth)
    {
        $params = $endpointAuth["params"];

        $deviceToken = $this->snapchat->getCachedDeviceToken();
        $deviceToken->initDeviceSignatureRegistration($this->username, $this->password, $params["timestamp"], $params["req_token"]);

        $this->addParam("dsig", $deviceToken->getDeviceSignature());
        $this->addParam("dtoken1i", $deviceToken->getDeviceTokenIdentifier());
    }

    /**
     * @return LoginResponse
     * @throws Exception
     */
    public function execute()
    {
        return parent::execute();
    }

}