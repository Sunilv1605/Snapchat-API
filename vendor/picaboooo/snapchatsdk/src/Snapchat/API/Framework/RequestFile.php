<?php

namespace Snapchat\API\Framework;

class RequestFile
{
    /**
     * @var string File Path
     */
    private $path;

    /**
     * @var string Mime Type
     */
    private $mime;

    /**
     * @var string Name
     */
    private $name;

    public function __construct($path, $mime, $name)
    {
        $this->path = $path;
        $this->mime = $mime;
        $this->name = $name;
    }

    /**
     * @return string File Path
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return string Mime Type
     */
    public function getMime()
    {
        return $this->mime;
    }

    /**
     * @return string Name
     */
    public function getName()
    {
        return $this->name;
    }
}