<?php

namespace Active\UserService;

class getPrimaryEmailAddressResponse
{

    /**
     * @var emailAddress $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return emailAddress
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param emailAddress $return
     * @return \Active\UserService\getPrimaryEmailAddressResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
