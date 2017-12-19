<?php

namespace Active\UserService;

class removeAddress
{

    /**
     * @var contextDefaultImpl $context
     */
    protected $context = null;

    /**
     * @var string $addressId
     */
    protected $addressId = null;

    
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
     * @return \Active\UserService\removeAddress
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddressId()
    {
      return $this->addressId;
    }

    /**
     * @param string $addressId
     * @return \Active\UserService\removeAddress
     */
    public function setAddressId($addressId)
    {
      $this->addressId = $addressId;
      return $this;
    }

}
