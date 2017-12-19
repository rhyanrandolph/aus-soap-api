<?php

namespace Active\UserService;

class updateUser
{

    /**
     * @var contextDefaultImpl $context
     */
    protected $context = null;

    /**
     * @var string $userId
     */
    protected $userId = null;

    /**
     * @var person $person
     */
    protected $person = null;

    
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
     * @return \Active\UserService\updateUser
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
     * @return \Active\UserService\updateUser
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

    /**
     * @return person
     */
    public function getPerson()
    {
      return $this->person;
    }

    /**
     * @param person $person
     * @return \Active\UserService\updateUser
     */
    public function setPerson($person)
    {
      $this->person = $person;
      return $this;
    }

}
