<?php

namespace Active\UserService;

class globalOptOutPerson
{

    /**
     * @var contextDefaultImpl $context
     */
    protected $context = null;

    /**
     * @var string $userId
     */
    protected $userId = null;

    
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
     * @return \Active\UserService\globalOptOutPerson
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
      return $this->userId;
    }

    /**
     * @param string $userId
     * @return \Active\UserService\globalOptOutPerson
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

}
