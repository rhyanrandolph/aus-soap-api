<?php

namespace Active\UserService;

class createUserWithGeneratedPassword
{

    /**
     * @var contextDefaultImpl $context
     */
    protected $context = null;

    /**
     * @var CreateUserRequestType $request
     */
    protected $request = null;

    
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
     * @return \Active\UserService\createUserWithGeneratedPassword
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

    /**
     * @return CreateUserRequestType
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param CreateUserRequestType $request
     * @return \Active\UserService\createUserWithGeneratedPassword
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
