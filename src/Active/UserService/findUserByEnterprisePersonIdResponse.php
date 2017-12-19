<?php

namespace Active\UserService;

class findUserByEnterprisePersonIdResponse
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
     * @return \Active\UserService\findUserByEnterprisePersonIdResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
