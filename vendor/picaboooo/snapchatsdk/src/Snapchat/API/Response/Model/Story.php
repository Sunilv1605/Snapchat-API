<?php

namespace Snapchat\API\Response\Model;

class Story
{
    const TYPE_IMAGE = 0;
    const TYPE_VIDEO = 1;
    const TYPE_VIDEO_NOAUDIO = 2;

    /**
     * ID
     * @var string
     */
    private $id;

    /**
     * Username
     * @var string
     */
    private $username;

    /**
     * Mature Content
     * @var boolean
     */
    private $mature_content;

    /**
     * Client ID
     * @var string
     */
    private $client_id;

    /**
     * Timestamp
     * @var int
     */
    private $timestamp;

    /**
     * Media ID
     * @var string
     */
    private $media_id;

    /**
     * Media Key
     * @var string
     */
    private $media_key;

    /**
     * Media IV
     * @var string
     */
    private $media_iv;

    /**
     * Thumnail IV
     * @var string
     */
    private $thumbnail_iv;

    /**
     * Media Type
     * @var int
     */
    private $media_type;

    /**
     * Time
     * @var float
     */
    private $time;

    /**
     * Caption Text Display
     * @var string
     */
    private $caption_text_display;

    /**
     * Zipped
     * @var boolean
     */
    private $zipped;

    /**
     * Time Left
     * @var int
     */
    private $time_left;

    /**
     * Needs Auth
     * @var boolean
     */
    private $needs_auth;

    /**
     * Shared Story
     * @var boolean
     */
    private $is_shared;

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
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return boolean
     */
    public function isMatureContent()
    {
        return $this->mature_content;
    }

    /**
     * @param boolean $mature_content
     */
    public function setMatureContent($mature_content)
    {
        $this->mature_content = $mature_content;
    }

    /**
     * @return string
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * @param string $client_id
     */
    public function setClientId($client_id)
    {
        $this->client_id = $client_id;
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
    public function getMediaKey()
    {
        return $this->media_key;
    }

    /**
     * @param string $media_key
     */
    public function setMediaKey($media_key)
    {
        $this->media_key = $media_key;
    }

    /**
     * @return string
     */
    public function getMediaIv()
    {
        return $this->media_iv;
    }

    /**
     * @param string $media_iv
     */
    public function setMediaIv($media_iv)
    {
        $this->media_iv = $media_iv;
    }

    /**
     * @return string
     */
    public function getThumbnailIv()
    {
        return $this->thumbnail_iv;
    }

    /**
     * @param string $thumbnail_iv
     */
    public function setThumbnailIv($thumbnail_iv)
    {
        $this->thumbnail_iv = $thumbnail_iv;
    }

    /**
     * @return int
     */
    public function getMediaType()
    {
        return $this->media_type;
    }

    /**
     * @param int $media_type
     */
    public function setMediaType($media_type)
    {
        $this->media_type = $media_type;
    }

    /**
     * @return float
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param float $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return string
     */
    public function getCaptionTextDisplay()
    {
        return $this->caption_text_display;
    }

    /**
     * @param string $caption_text_display
     */
    public function setCaptionTextDisplay($caption_text_display)
    {
        $this->caption_text_display = $caption_text_display;
    }

    /**
     * @return boolean
     */
    public function isZipped()
    {
        return $this->zipped;
    }

    /**
     * @param boolean $zipped
     */
    public function setZipped($zipped)
    {
        $this->zipped = $zipped;
    }

    /**
     * @return int
     */
    public function getTimeLeft()
    {
        return $this->time_left;
    }

    /**
     * @param int $time_left
     */
    public function setTimeLeft($time_left)
    {
        $this->time_left = $time_left;
    }

    /**
     * @return boolean
     */
    public function isNeedsAuth()
    {
        return $this->needs_auth;
    }

    /**
     * @param boolean $needs_auth
     */
    public function setNeedsAuth($needs_auth)
    {
        $this->needs_auth = $needs_auth;
    }

    /**
     * @return boolean
     */
    public function isIsShared()
    {
        return $this->is_shared;
    }

    /**
     * @param boolean $is_shared
     */
    public function setIsShared($is_shared)
    {
        $this->is_shared = $is_shared;
    }

    /**
     * @return boolean
     */
    public function isPhoto()
    {
        return $this->getMediaType() == self::TYPE_IMAGE;
    }

    /**
     * @return boolean
     */
    public function isVideo()
    {
        return $this->getMediaType() == self::TYPE_VIDEO || $this->getMediaType() == self::TYPE_VIDEO_NOAUDIO;
    }

    /**
     *
     * Get the File Extension for this Story
     *
     * @return string
     */
    public function getFileExtension()
    {
        if ($this->isPhoto()) {
            return "jpg";
        }

        if ($this->isVideo()) {
            return "mp4";
        }

        return "bin";
    }
}