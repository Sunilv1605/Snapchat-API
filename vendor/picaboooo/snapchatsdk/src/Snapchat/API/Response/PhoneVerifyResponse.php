<?php

namespace Snapchat\API\Response;

class PhoneVerifyResponse extends BaseResponse {

    /**
     * @var string
     */
    private $message_format;

    /**
     * @var string
     */
    private $param;

    /**
     * @var string
     */
    private $action;

    /**
     * @return string
     */
    public function getMessageFormat()
    {
        return $this->message_format;
    }

    /**
     * @param string $message_format
     */
    public function setMessageFormat($message_format)
    {
        $this->message_format = $message_format;
    }

    /**
     * @return string
     */
    public function getParam()
    {
        return $this->param;
    }

    /**
     * @param string $param
     */
    public function setParam($param)
    {
        $this->param = $param;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param string $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

}