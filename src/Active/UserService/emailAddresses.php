<?php

namespace Active\UserService;

class emailAddresses
{

    /**
     * @var int $primaryIndex
     */
    protected $primaryIndex = null;

    /**
     * @var emailAddress[] $userEmailAddresses
     */
    protected $userEmailAddresses = null;

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
     * @return \Active\UserService\emailAddresses
     */
    public function setPrimaryIndex($primaryIndex)
    {
      $this->primaryIndex = $primaryIndex;
      return $this;
    }

    /**
     * @return emailAddress[]
     */
    public function getUserEmailAddresses()
    {
      return $this->userEmailAddresses;
    }

    /**
     * @param emailAddress[] $userEmailAddresses
     * @return \Active\UserService\emailAddresses
     */
    public function setUserEmailAddresses(array $userEmailAddresses = null)
    {
      $this->userEmailAddresses = $userEmailAddresses;
      return $this;
    }

}
