<?php

namespace Active\UserService;

class removeEmailAddress
{

    /**
     * @var contextDefaultImpl $context
     */
    protected $context = null;

    /**
     * @var string $emailAddressId
     */
    protected $emailAddressId = null;

    
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
     * @return \Active\UserService\removeEmailAddress
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddressId()
    {
      return $this->emailAddressId;
    }

    /**
     * @param string $emailAddressId
     * @return \Active\UserService\removeEmailAddress
     */
    public function setEmailAddressId($emailAddressId)
    {
      $this->emailAddressId = $emailAddressId;
      return $this;
    }

}
