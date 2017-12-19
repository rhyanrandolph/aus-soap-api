<?php

namespace Active\UserService;

class getPrimaryAddressResponse
{

    /**
     * @var address $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return address
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param address $return
     * @return \Active\UserService\getPrimaryAddressResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
