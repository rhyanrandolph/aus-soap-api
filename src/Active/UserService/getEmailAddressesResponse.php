<?php

namespace Active\UserService;

class getEmailAddressesResponse
{

    /**
     * @var emailAddresses $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return emailAddresses
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param emailAddresses $return
     * @return \Active\UserService\getEmailAddressesResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
