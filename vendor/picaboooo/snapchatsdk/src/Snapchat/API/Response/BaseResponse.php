<?php


namespace Snapchat\API\Response;


class BaseResponse
{
    /** @var bool */
    private $logged;

    /** @var string */
    private $message;

    /** @var int */
    private $status;

    /**
     * @return bool
     */
    public function isLogged()
    {
        return $this->logged;
    }

    /**
     * @param bool $logged
     */
    public function setLogged($logged)
    {
        $this->logged = $logged;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
}