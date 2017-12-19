<?php

namespace Active\UserService;

class findGroupRoleMappingsByGroup
{

    /**
     * @var contextDefaultImpl $context
     */
    protected $context = null;

    /**
     * @var string $groupId
     */
    protected $groupId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return contextDefaultImpl
     */
    public function getContext()
    {
      return $this->context;
    }

    /**
     * @param contextDefaultImpl $context
     * @return \Active\UserService\findGroupRoleMappingsByGroup
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

    /**
     * @return string
     */
    public function getGroupId()
    {
      return $this->groupId;
    }

    /**
     * @param string $groupId
     * @return \Active\UserService\findGroupRoleMappingsByGroup
     */
    public function setGroupId($groupId)
    {
      $this->groupId = $groupId;
      return $this;
    }

}
