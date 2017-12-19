<?php

namespace Active\UserService;

class findUserGroupRolesByMarketIdentifierResponse
{

    /**
     * @var userGroupRole[] $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return userGroupRole[]
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param userGroupRole[] $return
     * @return \Active\UserService\findUserGroupRolesByMarketIdentifierResponse
     */
    public function setReturn(array $return = null)
    {
      $this->return = $return;
      return $this;
    }

}
