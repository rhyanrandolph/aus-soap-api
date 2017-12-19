<?php

namespace Active\UserService;

class updateEmailAddress
{

    /**
     * @var contextDefaultImpl $context
     */
    protected $context = null;

    /**
     * @var emailAddress $emailAddress
     */
    protected $emailAddress = null;

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
     * @return \Active\UserService\updateEmailAddress
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

    /**
     * @return emailAddress
     */
    public function getEmailAddress()
    {
      return $this->emailAddress;
    }

    /**
     * @param emailAddress $emailAddress
     * @return \Active\UserService\updateEmailAddress
     */
    public function setEmailAddress($emailAddress)
    {
      $this->emailAddress = $emailAddress;
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
     * @return \Active\UserService\updateEmailAddress
     */
    public function setSetAsPrimary($setAsPrimary)
    {
      $this->setAsPrimary = $setAsPrimary;
      return $this;
    }

}
