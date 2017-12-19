<?php

namespace Active\UserService;

class bindExternalAccountResponse
{

    /**
     * @var externalAccount $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return externalAccount
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param externalAccount $return
     * @return \Active\UserService\bindExternalAccountResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
