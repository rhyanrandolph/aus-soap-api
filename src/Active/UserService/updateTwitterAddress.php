<?php

namespace Active\UserService;

class updateTwitterAddress
{

    /**
     * @var contextDefaultImpl $context
     */
    protected $context = null;

    /**
     * @var personTwitterAddress $twitterAddress
     */
    protected $twitterAddress = null;

    
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
     * @return \Active\UserService\updateTwitterAddress
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

    /**
     * @return personTwitterAddress
     */
    public function getTwitterAddress()
    {
      return $this->twitterAddress;
    }

    /**
     * @param personTwitterAddress $twitterAddress
     * @return \Active\UserService\updateTwitterAddress
     */
    public function setTwitterAddress($twitterAddress)
    {
      $this->twitterAddress = $twitterAddress;
      return $this;
    }

}
