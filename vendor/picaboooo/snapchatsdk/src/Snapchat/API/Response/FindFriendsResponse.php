<?php

namespace Snapchat\API\Response;

use Snapchat\API\Response\Model\Friend;

class FindFriendsResponse extends BaseResponse {

    /**
     * Results
     * @var Friend[]
     */
    private $results;

    /**
     * Last AddressBook Updated Date
     * @var int
     */
    private $last_address_book_updated_date;

    /**
     * Trimmed
     * @var boolean
     */
    private $trimmed;

    /**
     * Friends that were found by the Numbers provided
     * @return Model\Friend[]
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param Model\Friend[] $results
     */
    public function setResults($results)
    {
        $this->results = $results;
    }

    /**
     * Timestamp that the Address Book was last Updated
     * @return int
     */
    public function getLastAddressBookUpdatedDate()
    {
        return $this->last_address_book_updated_date;
    }

    /**
     * @param int $last_address_book_updated_date
     */
    public function setLastAddressBookUpdatedDate($last_address_book_updated_date)
    {
        $this->last_address_book_updated_date = $last_address_book_updated_date;
    }

    /**
     * Whether the results of this request were trimmed. (>30 numbers provided)
     * @return boolean
     */
    public function isTrimmed()
    {
        return $this->trimmed;
    }

    /**
     * @param boolean $trimmed
     */
    public function setTrimmed($trimmed)
    {
        $this->trimmed = $trimmed;
    }

}