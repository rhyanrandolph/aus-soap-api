<?php

namespace Active\UserService;

class findEnterprisePersonIdByUserNameResponse
{

    /**
     * @var string $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param string $return
     * @return \Active\UserService\findEnterprisePersonIdByUserNameResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
