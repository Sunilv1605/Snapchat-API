<?php

namespace Snapchat\Model;

class Captcha {

    /**
     * @var string Captcha Id
     */
    private $id;

    /**
     * @var string Captcha Folder
     */
    private $folder;

    /**
     * @var string[] Captcha Files
     */
    private $files;

    /**
     * @param $id string Captcha Id
     * @param $files string[] Captcha Files
     */
    public function __construct($id, $folder, $files){
        $this->id = $id;
        $this->folder = $folder;
        $this->files = $files;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * @return string[]
     */
    public function getFiles()
    {
        return $this->files;
    }

}