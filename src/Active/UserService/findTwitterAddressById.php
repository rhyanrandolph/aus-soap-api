<?php

namespace Active\UserService;

class findTwitterAddressById
{

    /**
     * @var contextDefaultImpl $context
     */
    protected $context = null;

    /**
     * @var string $twitterAddressId
     */
    protected $twitterAddressId = null;

    
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
     * @return \Active\UserService\findTwitterAddressById
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

    /**
     * @return string
     */
    public function getTwitterAddressId()
    {
      return $this->twitterAddressId;
    }

    /**
     * @param string $twitterAddressId
     * @return \Active\UserService\findTwitterAddressById
     */
    public function setTwitterAddressId($twitterAddressId)
    {
      $this->twitterAddressId = $twitterAddressId;
      return $this;
    }

}
