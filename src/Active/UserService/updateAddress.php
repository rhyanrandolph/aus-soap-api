<?php

namespace Active\UserService;

class updateAddress
{

    /**
     * @var contextDefaultImpl $context
     */
    protected $context = null;

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
     * @return \Active\UserService\updateAddress
     */
    public function setContext($context)
    {
      $this->context = $context;
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
     * @return \Active\UserService\updateAddress
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
     * @return \Active\UserService\updateAddress
     */
    public function setSetAsPrimary($setAsPrimary)
    {
      $this->setAsPrimary = $setAsPrimary;
      return $this;
    }

}
