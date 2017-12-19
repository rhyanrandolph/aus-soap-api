<?php

namespace Active\UserService;

class phoneNumbers
{

    /**
     * @var int $primaryIndex
     */
    protected $primaryIndex = null;

    /**
     * @var phoneNumber[] $userPhoneNumbers
     */
    protected $userPhoneNumbers = null;

    /**
     * @param int $primaryIndex
     */
    public function __construct($primaryIndex)
    {
      $this->primaryIndex = $primaryIndex;
    }

    /**
     * @return int
     */
    public function getPrimaryIndex()
    {
      return $this->primaryIndex;
    }

    /**
     * @param int $primaryIndex
     * @return \Active\UserService\phoneNumbers
     */
    public function setPrimaryIndex($primaryIndex)
    {
      $this->primaryIndex = $primaryIndex;
      return $this;
    }

    /**
     * @return phoneNumber[]
     */
    public function getUserPhoneNumbers()
    {
      return $this->userPhoneNumbers;
    }

    /**
     * @param phoneNumber[] $userPhoneNumbers
     * @return \Active\UserService\phoneNumbers
     */
    public function setUserPhoneNumbers(array $userPhoneNumbers = null)
    {
      $this->userPhoneNumbers = $userPhoneNumbers;
      return $this;
    }

}
