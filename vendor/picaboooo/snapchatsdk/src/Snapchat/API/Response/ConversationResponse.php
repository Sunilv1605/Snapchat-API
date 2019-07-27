<?php

namespace Snapchat\API\Response;

class ConversationResponse
{
    /**
     * Conversation
     * @var Model\Conversation
     */
    private $conversation;

    /**
     * @return Model\Conversation
     */
    public function getConversation()
    {
        return $this->conversation;
    }

    /**
     * @param Model\Conversation $conversation
     */
    public function setConversation($conversation)
    {
        $this->conversation = $conversation;
    }
}