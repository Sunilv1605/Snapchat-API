<?php

namespace Snapchat\API\Response\Model;

class ChatMessageMedia {

    /**
     * Media ID
     * @var string
     */
    private $media_id;

    /**
     * Key
     * @var string
     */
    private $key;

    /**
     * IV
     * @var string
     */
    private $iv;

    /**
     * @return string
     */
    public function getMediaId()
    {
        return $this->media_id;
    }

    /**
     * @param string $media_id
     */
    public function setMediaId($media_id)
    {
        $this->media_id = $media_id;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @return string
     */
    public function getIv()
    {
        return $this->iv;
    }

    /**
     * @param string $iv
     */
    public function setIv($iv)
    {
        $this->iv = $iv;
    }

}