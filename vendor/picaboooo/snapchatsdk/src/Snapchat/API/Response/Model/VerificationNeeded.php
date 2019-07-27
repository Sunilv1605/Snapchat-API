<?php

namespace Snapchat\API\Response\Model;

class VerificationNeeded {

    const TYPE_CAPTCHA = "needs_captcha";

    /**
     * Prompt Message
     * @var string
     */
    private $prompt;

    /**
     * Verification Type
     * @var string
     */
    private $type;

    /**
     * @return string
     */
    public function getPrompt()
    {
        return $this->prompt;
    }

    /**
     * @param string $prompt
     */
    public function setPrompt($prompt)
    {
        $this->prompt = $prompt;
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

}