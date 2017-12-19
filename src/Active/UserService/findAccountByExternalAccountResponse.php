<?php

namespace Active\UserService;

class findAccountByExternalAccountResponse
{

    /**
     * @var account $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return account
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param account $return
     * @return \Active\UserService\findAccountByExternalAccountResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
