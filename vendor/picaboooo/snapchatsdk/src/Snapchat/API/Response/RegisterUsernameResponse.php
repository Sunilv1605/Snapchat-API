<?php

namespace Snapchat\API\Response;

class RegisterUsernameResponse extends AllUpdatesResponse {

    /**
     * Verification Needed
     * @var Model\VerificationNeeded
     */
    private $verification_needed;

    /**
     * @return Model\VerificationNeeded
     */
    public function getVerificationNeeded()
    {
        return $this->verification_needed;
    }

    /**
     * @param Model\VerificationNeeded $verification_needed
     */
    public function setVerificationNeeded($verification_needed)
    {
        $this->verification_needed = $verification_needed;
    }

    /**
     * @return bool
     */
    public function isVerificationNeeded(){
        return $this->verification_needed != null;
    }

}