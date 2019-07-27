<?php

namespace Snapchat\API\Response\Model;

class ChatMessage {

    /**
     * Chat Message Body
     * @var ChatMessageBody
     */
    private $body;

    /**
     * Chat Message ID
     * @var string
     */
    private $chat_message_id;

    /**
     * Sequence Number
     * @var int
     */
    private $seq_num;

    /**
     * Timestamp
     * @var int
     */
    private $timestamp;

    /**
     * Chat Message Header
     * @var ChatMessageHeader
     */
    private $header;

    /**
     * Type
     * @var string
     */
    private $type;

    /**
     * ID
     * @var string
     */
    private $id;

    /**
     * @return ChatMessageBody
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param ChatMessageBody $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getChatMessageId()
    {
        return $this->chat_message_id;
    }

    /**
     * @param string $chat_message_id
     */
    public function setChatMessageId($chat_message_id)
    {
        $this->chat_message_id = $chat_message_id;
    }

    /**
     * @return int
     */
    public function getSeqNum()
    {
        return $this->seq_num;
    }

    /**
     * @param int $seq_num
     */
    public function setSeqNum($seq_num)
    {
        $this->seq_num = $seq_num;
    }

    /**
     * @return int
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param int $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }

    /**
     * @return ChatMessageHeader
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param ChatMessageHeader $header
     */
    public function setHeader($header)
    {
        $this->header = $header;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

}