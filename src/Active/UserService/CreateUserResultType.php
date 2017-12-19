<?php

namespace Active\UserService;

class CreateUserResultType
{

    /**
     * @var user $user
     */
    protected $user = null;

    /**
     * @param user $user
     */
    public function __construct($user)
    {
      $this->user = $user;
    }

    /**
     * @return user
     */
    public function getUser()
    {
      return $this->user;
    }

    /**
     * @param user $user
     * @return \Active\UserService\CreateUserResultType
     */
    public function setUser($user)
    {
      $this->user = $user;
      return $this;
    }

}
