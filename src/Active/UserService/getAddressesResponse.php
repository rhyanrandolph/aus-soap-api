<?php

namespace Active\UserService;

class getAddressesResponse
{

    /**
     * @var addresses $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return addresses
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param addresses $return
     * @return \Active\UserService\getAddressesResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
