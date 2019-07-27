<?php

namespace Snapchat\API\Response\Model;

class AddedFriend extends Friend {

    /**
     * Add Source
     * @var string
     */
    private $add_source;

    /**
     * Add Source Type
     * @var string
     */
    private $add_source_type;

    /**
     * @return string
     */
    public function getAddSource()
    {
        return $this->add_source;
    }

    /**
     * @param string $add_source
     */
    public function setAddSource($add_source)
    {
        $this->add_source = $add_source;
    }

    /**
     * @return string
     */
    public function getAddSourceType()
    {
        return $this->add_source_type;
    }

    /**
     * @param string $add_source_type
     */
    public function setAddSourceType($add_source_type)
    {
        $this->add_source_type = $add_source_type;
    }

}