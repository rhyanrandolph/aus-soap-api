<?php

namespace Active\UserService;

class findUserByUserNameResponse
{

    /**
     * @var user $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return user
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param user $return
     * @return \Active\UserService\findUserByUserNameResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
