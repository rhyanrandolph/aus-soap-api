<?php

namespace Active\UserService;

class findUserByUserName
{

    /**
     * @var contextDefaultImpl $context
     */
    protected $context = null;

    /**
     * @var string $userName
     */
    protected $userName = null;

    
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
     * @return \Active\UserService\findUserByUserName
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->userName;
    }

    /**
     * @param string $userName
     * @return \Active\UserService\findUserByUserName
     */
    public function setUserName($userName)
    {
      $this->userName = $userName;
      return $this;
    }

}
