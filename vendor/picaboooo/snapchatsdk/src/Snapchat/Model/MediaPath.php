<?php

namespace Snapchat\Model;

class MediaPath {

    private $blob;

    private $overlay;

    /**
     * @param $blob string File Path for Blob
     * @param $overlay string File Path for Overlay
     */
    public function __construct($blob, $overlay){
        $this->blob = $blob;
        $this->overlay = $overlay;
    }

    /**
     *
     * Get the File Path of the Blob
     *
     * @return string
     */
    public function getBlobPath(){
        return $this->blob;
    }

    /**
     *
     * Get the File Path of the Overlay
     *
     * @return string
     */
    public function getOverlayPath(){
        return $this->overlay;
    }

    /**
     *
     * Check if the Blob File exists.
     *
     * @return bool
     */
    public function blobExists(){
        return file_exists($this->getBlobPath());
    }

    /**
     *
     * Check if the Overlay File exists.
     *
     * @return bool
     */
    public function overlayExists(){
        return file_exists($this->getOverlayPath());
    }

}