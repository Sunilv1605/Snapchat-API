<?php

namespace Snapchat\API\Response;

class SnapTagResponse extends BaseResponse {

    /**
     * Image Data
     * @var string
     */
    private $imageData;

    /**
     * QR Path
     * @var string
     */
    private $qrPath;

    /**
     * @return string
     */
    public function getImageData()
    {
        return $this->imageData;
    }

    /**
     * @param string $imageData
     */
    public function setImageData($imageData)
    {
        $this->imageData = $imageData;
    }

    /**
     * @return string
     */
    public function getQrPath()
    {
        return $this->qrPath;
    }

    /**
     * @param string $qrPath
     */
    public function setQrPath($qrPath)
    {
        $this->qrPath = $qrPath;
    }

}