<?php

namespace Snapchat\API\Response;

class FriendResponse extends BaseResponse
{
    /**
     * Friend Object
     * @var object
     */
    private $object;

    /**
     * @return object
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param object $object
     */
    public function setObject($object)
    {
        $this->object = $object;
    }
}