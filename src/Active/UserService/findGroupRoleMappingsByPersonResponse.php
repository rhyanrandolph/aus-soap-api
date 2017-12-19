<?php

namespace Active\UserService;

class findGroupRoleMappingsByPersonResponse
{

    /**
     * @var groupRoleMapping[] $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return groupRoleMapping[]
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param groupRoleMapping[] $return
     * @return \Active\UserService\findGroupRoleMappingsByPersonResponse
     */
    public function setReturn(array $return = null)
    {
      $this->return = $return;
      return $this;
    }

}
