<?php

namespace Active\UserService;

class findUserGroupByIdResponse
{

    /**
     * @var userGroup $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return userGroup
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param userGroup $return
     * @return \Active\UserService\findUserGroupByIdResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
