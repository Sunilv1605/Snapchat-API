<?php

namespace Snapchat\API\Response\Model;

class ChatMessageHeader {

    /**
     * From
     * @var string
     */
    private $from;

    /**
     * To
     * @var string[]
     */
    private $to;

    /**
     * Conversation ID
     * @var string
     */
    private $conv_id;

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param string $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * @return string[]
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param string[] $to
     */
    public function setTo($to)
    {
        $this->to = $to;
    }

    /**
     * @return string
     */
    public function getConvId()
    {
        return $this->conv_id;
    }

    /**
     * @param string $conv_id
     */
    public function setConvId($conv_id)
    {
        $this->conv_id = $conv_id;
    }

}