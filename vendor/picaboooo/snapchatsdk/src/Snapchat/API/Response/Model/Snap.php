<?php

namespace Snapchat\API\Response\Model;

class Snap
{
    const TYPE_IMAGE = 0;
    const TYPE_VIDEO = 1;
    const TYPE_VIDEO_NOAUDIO = 2;
    const TYPE_FRIEND_REQUEST = 3;
    const TYPE_FRIEND_REQUEST_IMAGE = 4;
    const TYPE_FRIEND_REQUEST_VIDEO = 5;
    const TYPE_FRIEND_REQUEST_VIDEO_NOAUDIO = 6;

    const STATE_NONE = -1;
    const STATE_SENT = 0;
    const STATE_DELIVERED = 1;
    const STATE_VIEWED = 2;
    const STATE_SCREENSHOT = 3;

    /**
     * Recipient
     * @var string
     */
    private $rp;

    /**
     * Sender
     * @var string
     */
    private $sn;

    /**
     * ID
     * @var string
     */
    private $id;

    /**
     * Client ID
     * @var string
     */
    private $c_id;

    /**
     * State
     * @var int
     */
    private $st;

    /**
     * Type
     * @var int
     */
    private $m;

    /**
     * Sent Timestamp
     * @var int
     */
    private $sts;

    /**
     * Last Interaction Timestamp
     * @var int
     */
    private $ts;

    /**
     * View Time
     * @var int
     */
    private $t;

    /**
     * Replayed
     * @var boolean
     */
    private $replayed;

    /**
     * Zipped
     * @var boolean
     */
    private $zipped;

    /**
     * Broadcast
     * @var int
     */
    private $broadcast;

    /**
     * Broadcast Media URL
     * @var string
     */
    private $broadcast_media_url;

    /**
     * @return string
     */
    public function getRecipient()
    {
        return $this->rp;
    }

    /**
     * @param string $rp
     */
    public function setRp($rp)
    {
        $this->rp = $rp;
    }

    /**
     * @return string
     */
    public function getSender()
    {
        return $this->sn;
    }

    /**
     * @param string $sn
     */
    public function setSn($sn)
    {
        $this->sn = $sn;
    }

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
    public function getClientId()
    {
        return $this->c_id;
    }

    /**
     * @param string $c_id
     */
    public function setCId($c_id)
    {
        $this->c_id = $c_id;
    }

    /**
     * @return int
     */
    public function getState()
    {
        return $this->st;
    }

    /**
     * @param int $st
     */
    public function setSt($st)
    {
        $this->st = $st;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->m;
    }

    /**
     * @param int $m
     */
    public function setM($m)
    {
        $this->m = $m;
    }

    /**
     * @return int
     */
    public function getSentTimestamp()
    {
        return $this->sts;
    }

    /**
     * @param int $sts
     */
    public function setSts($sts)
    {
        $this->sts = $sts;
    }

    /**
     * @return int
     */
    public function getTimestamp()
    {
        return $this->ts;
    }

    /**
     * @param int $ts
     */
    public function setTs($ts)
    {
        $this->ts = $ts;
    }

    /**
     * @return int
     */
    public function getViewTime()
    {
        return $this->t;
    }

    /**
     * @param int $t
     */
    public function setT($t)
    {
        $this->t = $t;
    }

    /**
     * @return boolean
     */
    public function isReplayed()
    {
        return $this->replayed;
    }

    /**
     * @param boolean $replayed
     */
    public function setReplayed($replayed)
    {
        $this->replayed = $replayed;
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
     * @return boolean
     */
    public function isBroadcast()
    {
        return $this->broadcast == 1;
    }

    /**
     * @param int $broadcast
     */
    public function setBroadcast($broadcast)
    {
        $this->broadcast = $broadcast;
    }

    /**
     * @return string
     */
    public function getBroadcastMediaUrl()
    {
        return $this->broadcast_media_url;
    }

    /**
     * @param string $broadcast_media_url
     */
    public function setBroadcastMediaUrl($broadcast_media_url)
    {
        $this->broadcast_media_url = $broadcast_media_url;
    }

    /**
     * @return boolean
     */
    public function wasSent()
    {
        return substr($this->getId(), -1) == "s";
    }

    /**
     * @return boolean
     */
    public function wasReceived()
    {
        return substr($this->getId(), -1) == "r";
    }

    /**
     * @return boolean
     */
    public function hasBeenScreenshot()
    {
        return $this->getState() == self::STATE_SCREENSHOT;
    }

    /**
     * @return boolean
     */
    public function hasBeenViewed()
    {
        return $this->getState() == self::STATE_VIEWED || $this->getState() == self::STATE_SCREENSHOT;
    }

    /**
     * @return boolean
     */
    public function isPhoto()
    {
        return $this->getType() == self::TYPE_IMAGE;
    }

    /**
     * @return boolean
     */
    public function isVideo()
    {
        return $this->getType() == self::TYPE_VIDEO || $this->getType() == self::TYPE_VIDEO_NOAUDIO;
    }

    /**
     *
     * Get the File Extension for this Snap
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