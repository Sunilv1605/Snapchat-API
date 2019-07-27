<?php

namespace Snapchat\API\Response\Model;

class Message {

    /**
     * Chat Message
     * @var ChatMessage
     */
    private $chat_message;

    /**
     * Snap
     * @var Snap
     */
    private $snap;

    /**
     * Iteration Token
     * @var string
     */
    private $iter_token;

    /**
     * Check if this Message is a ChatMessage
     * @return bool
     */
    public function isChatMessage(){
        return $this->chat_message != null;
    }

    /**
     * Check if this Message is a Snap
     * @return bool
     */
    public function isSnap(){
        return $this->snap != null;
    }

    /**
     * @return ChatMessage
     */
    public function getChatMessage()
    {
        return $this->chat_message;
    }

    /**
     * @param ChatMessage $chat_message
     */
    public function setChatMessage($chat_message)
    {
        $this->chat_message = $chat_message;
    }

    /**
     * @return Snap
     */
    public function getSnap()
    {
        return $this->snap;
    }

    /**
     * @param Snap $snap
     */
    public function setSnap($snap)
    {
        $this->snap = $snap;
    }

    /**
     * @return string
     */
    public function getIterToken()
    {
        return $this->iter_token;
    }

    /**
     * @param string $iter_token
     */
    public function setIterToken($iter_token)
    {
        $this->iter_token = $iter_token;
    }

}