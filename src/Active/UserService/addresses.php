<?php

namespace Active\UserService;

class addresses
{

    /**
     * @var int $primaryIndex
     */
    protected $primaryIndex = null;

    /**
     * @var address[] $userAddresses
     */
    protected $userAddresses = null;

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
     * @return \Active\UserService\addresses
     */
    public function setPrimaryIndex($primaryIndex)
    {
      $this->primaryIndex = $primaryIndex;
      return $this;
    }

    /**
     * @return address[]
     */
    public function getUserAddresses()
    {
      return $this->userAddresses;
    }

    /**
     * @param address[] $userAddresses
     * @return \Active\UserService\addresses
     */
    public function setUserAddresses(array $userAddresses = null)
    {
      $this->userAddresses = $userAddresses;
      return $this;
    }

}
