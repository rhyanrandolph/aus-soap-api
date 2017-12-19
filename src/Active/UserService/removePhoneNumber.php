<?php

namespace Active\UserService;

class removePhoneNumber
{

    /**
     * @var contextDefaultImpl $context
     */
    protected $context = null;

    /**
     * @var string $phoneNumberId
     */
    protected $phoneNumberId = null;

    
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
     * @return \Active\UserService\removePhoneNumber
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumberId()
    {
      return $this->phoneNumberId;
    }

    /**
     * @param string $phoneNumberId
     * @return \Active\UserService\removePhoneNumber
     */
    public function setPhoneNumberId($phoneNumberId)
    {
      $this->phoneNumberId = $phoneNumberId;
      return $this;
    }

}
