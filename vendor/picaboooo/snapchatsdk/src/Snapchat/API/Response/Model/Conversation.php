<?php

namespace Snapchat\API\Response\Model;

class Conversation {

    /**
     * ID
     * @var string
     */
    private $id;

    /**
     * Participants
     * @var string[]
     */
    private $participants;

    /**
     * Last Interaction Timestamp
     * @var int
     */
    private $last_interaction_ts;

    /**
     * Pending Chats for
     * @var string[]
     */
    private $pending_chats_for;

    /**
     * Iteration Token
     * @var string
     */
    private $iter_token;

    /**
     * Conversation Messages
     * @var ConversationMessages
     */
    private $conversation_messages;

    /**
     * Conversation Sate
     * @var ConversationState
     */
    private $conversation_state;

    /**
     * Last Snap
     * @var Snap
     */
    private $last_snap;

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

    /**
     * @return string[]
     */
    public function getParticipants()
    {
        return $this->participants;
    }

    /**
     * @param string[] $participants
     */
    public function setParticipants($participants)
    {
        $this->participants = $participants;
    }

    /**
     * @return int
     */
    public function getLastInteractionTs()
    {
        return $this->last_interaction_ts;
    }

    /**
     * @param int $last_interaction_ts
     */
    public function setLastInteractionTs($last_interaction_ts)
    {
        $this->last_interaction_ts = $last_interaction_ts;
    }

    /**
     * @return string[]
     */
    public function getPendingChatsFor()
    {
        return $this->pending_chats_for;
    }

    /**
     * @param string[] $pending_chats_for
     */
    public function setPendingChatsFor($pending_chats_for)
    {
        $this->pending_chats_for = $pending_chats_for;
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

    /**
     * @return ConversationMessages
     */
    public function getConversationMessages()
    {
        return $this->conversation_messages;
    }

    /**
     * @param ConversationMessages $conversation_messages
     */
    public function setConversationMessages($conversation_messages)
    {
        $this->conversation_messages = $conversation_messages;
    }

    /**
     * @return ConversationState
     */
    public function getConversationState()
    {
        return $this->conversation_state;
    }

    /**
     * @param ConversationState $conversation_state
     */
    public function setConversationState($conversation_state)
    {
        $this->conversation_state = $conversation_state;
    }

    /**
     * @return Snap
     */
    public function getLastSnap()
    {
        return $this->last_snap;
    }

    /**
     * @param Snap $last_snap
     */
    public function setLastSnap($last_snap)
    {
        $this->last_snap = $last_snap;
    }

    /**
     *
     * Get all Snaps in this Conversation
     *
     * @return Snap[]
     */
    public function getSnaps(){
        return $this->getConversationMessages()->getSnaps();
    }

    /**
     *
     * Get all Chats in this Conversation
     *
     * @return ChatMessage[]
     */
    public function getChats(){
        return $this->getConversationMessages()->getChats();
    }

}