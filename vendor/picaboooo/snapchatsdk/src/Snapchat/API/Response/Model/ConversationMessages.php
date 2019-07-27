<?php

namespace Snapchat\API\Response\Model;

class ConversationMessages {

    /**
     * Messages
     * @var Message[]
     */
    private $messages;

    /**
     * Messaging Auth
     * @var MessagingAuth
     */
    private $messaging_auth;

    /**
     * @return Message[]
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @param Message[] $messages
     */
    public function setMessages($messages)
    {
        $this->messages = $messages;
    }

    /**
     * @return MessagingAuth
     */
    public function getMessagingAuth()
    {
        return $this->messaging_auth;
    }

    /**
     * @param MessagingAuth $messaging_auth
     */
    public function setMessagingAuth($messaging_auth)
    {
        $this->messaging_auth = $messaging_auth;
    }

    /**
     *
     * Get all Snaps in this Conversation
     *
     * @return Snap[]
     */
    public function getSnaps(){

        $snaps = array();

        foreach($this->getMessages() as $message){
            if($message->isSnap()){
                $snaps[] = $message->getSnap();
            }
        }

        return $snaps;

    }

    /**
     *
     * Get all Chats in this Conversation
     *
     * @return ChatMessage[]
     */
    public function getChats(){

        $chats = array();

        foreach($this->getMessages() as $message){
            if($message->isChatMessage()){
                $chats[] = $message->getChatMessage();
            }
        }

        return $chats;

    }

}
