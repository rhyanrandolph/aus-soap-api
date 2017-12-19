<?php

namespace Active\UserService;

class getPhoneNumbersResponse
{

    /**
     * @var phoneNumbers $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return phoneNumbers
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param phoneNumbers $return
     * @return \Active\UserService\getPhoneNumbersResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
