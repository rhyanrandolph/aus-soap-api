<?php

namespace Active\UserService;

class createUserGroup
{

    /**
     * @var contextDefaultImpl $context
     */
    protected $context = null;

    /**
     * @var userGroup $userGroup
     */
    protected $userGroup = null;

    
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
     * @return \Active\UserService\createUserGroup
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

    /**
     * @return userGroup
     */
    public function getUserGroup()
    {
      return $this->userGroup;
    }

    /**
     * @param userGroup $userGroup
     * @return \Active\UserService\createUserGroup
     */
    public function setUserGroup($userGroup)
    {
      $this->userGroup = $userGroup;
      return $this;
    }

}
