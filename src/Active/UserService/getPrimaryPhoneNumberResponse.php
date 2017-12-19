<?php

namespace Active\UserService;

class getPrimaryPhoneNumberResponse
{

    /**
     * @var phoneNumber $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return phoneNumber
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param phoneNumber $return
     * @return \Active\UserService\getPrimaryPhoneNumberResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
