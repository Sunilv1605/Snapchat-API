<?php

namespace Snapchat\API\Response\Model;

class ChatMessageBody {

    const TYPE_TEXT = "text";
    const TYPE_MEDIA = "media";

    /**
     * Type
     * @var string
     */
    private $type;

    /**
     * Text
     * @var string
     */
    private $text;

    /**
     * Chat Message Media
     * @var ChatMessageMedia
     */
    private $media;

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

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return ChatMessageMedia
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * @param ChatMessageMedia $media
     */
    public function setMedia($media)
    {
        $this->media = $media;
    }

}