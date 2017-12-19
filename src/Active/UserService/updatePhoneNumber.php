<?php

namespace Active\UserService;

class updatePhoneNumber
{

    /**
     * @var contextDefaultImpl $context
     */
    protected $context = null;

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
     * @return \Active\UserService\updatePhoneNumber
     */
    public function setContext($context)
    {
      $this->context = $context;
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
     * @return \Active\UserService\updatePhoneNumber
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
     * @return \Active\UserService\updatePhoneNumber
     */
    public function setSetAsPrimary($setAsPrimary)
    {
      $this->setAsPrimary = $setAsPrimary;
      return $this;
    }

}
