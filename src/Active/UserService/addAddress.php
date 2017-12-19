<?php

namespace Active\UserService;

class addAddress
{

    /**
     * @var contextDefaultImpl $context
     */
    protected $context = null;

    /**
     * @var string $userId
     */
    protected $userId = null;

    /**
     * @var address $address
     */
    protected $address = null;

    /**
     * @var boolean $setAsPrimary
     */
    protected $setAsPrimary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return contextDefaultImpl
     */
    public function getContext()
    {
      return $this->context;
    }

    /**
     * @param contextDefaultImpl $context
     * @return \Active\UserService\addAddress
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
      return $this->userId;
    }

    /**
     * @param string $userId
     * @return \Active\UserService\addAddress
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

    /**
     * @return address
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param address $address
     * @return \Active\UserService\addAddress
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSetAsPrimary()
    {
      return $this->setAsPrimary;
    }

    /**
     * @param boolean $setAsPrimary
     * @return \Active\UserService\addAddress
     */
    public function setSetAsPrimary($setAsPrimary)
    {
      $this->setAsPrimary = $setAsPrimary;
      return $this;
    }

}
