<?php

namespace Active\UserService;

class addPhoneNumber
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
     * @var phoneNumber $phoneNumber
     */
    protected $phoneNumber = null;

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
     * @return \Active\UserService\addPhoneNumber
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
     * @return \Active\UserService\addPhoneNumber
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

    /**
     * @return phoneNumber
     */
    public function getPhoneNumber()
    {
      return $this->phoneNumber;
    }

    /**
     * @param phoneNumber $phoneNumber
     * @return \Active\UserService\addPhoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
      $this->phoneNumber = $phoneNumber;
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
     * @return \Active\UserService\addPhoneNumber
     */
    public function setSetAsPrimary($setAsPrimary)
    {
      $this->setAsPrimary = $setAsPrimary;
      return $this;
    }

}
