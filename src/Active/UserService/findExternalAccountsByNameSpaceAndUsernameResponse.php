<?php

namespace Active\UserService;

class findExternalAccountsByNameSpaceAndUsernameResponse
{

    /**
     * @var externalAccount[] $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return externalAccount[]
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param externalAccount[] $return
     * @return \Active\UserService\findExternalAccountsByNameSpaceAndUsernameResponse
     */
    public function setReturn(array $return = null)
    {
      $this->return = $return;
      return $this;
    }

}
