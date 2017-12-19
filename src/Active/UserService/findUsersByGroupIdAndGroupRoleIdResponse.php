<?php

namespace Active\UserService;

class findUsersByGroupIdAndGroupRoleIdResponse
{

    /**
     * @var user[] $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return user[]
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param user[] $return
     * @return \Active\UserService\findUsersByGroupIdAndGroupRoleIdResponse
     */
    public function setReturn(array $return = null)
    {
      $this->return = $return;
      return $this;
    }

}
