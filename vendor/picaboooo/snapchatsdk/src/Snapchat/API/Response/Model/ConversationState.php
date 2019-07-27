<?php

namespace Snapchat\API\Response\Model;

class ConversationState {

    /**
     * User Sequences
     * @var array
     */
    private $user_sequences;

    /**
     * @return array
     */
    public function getUserSequences()
    {
        return $this->user_sequences;
    }

    /**
     * @param array $user_sequences
     */
    public function setUserSequences($user_sequences)
    {
        $this->user_sequences = $user_sequences;
    }

}