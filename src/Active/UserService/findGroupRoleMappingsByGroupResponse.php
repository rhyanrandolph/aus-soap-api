<?php

namespace Active\UserService;

class findGroupRoleMappingsByGroupResponse
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
     * @return \Active\UserService\findGroupRoleMappingsByGroupResponse
     */
    public function setReturn(array $return = null)
    {
      $this->return = $return;
      return $this;
    }

}
