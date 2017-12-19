<?php

namespace Active\UserService;

class findUsersByGroupIdAndGroupRoleId
{

    /**
     * @var contextDefaultImpl $context
     */
    protected $context = null;

    /**
     * @var string $groupId
     */
    protected $groupId = null;

    /**
     * @var int $userGroupRoleId
     */
    protected $userGroupRoleId = null;

    
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
     * @return \Active\UserService\findUsersByGroupIdAndGroupRoleId
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
     * @return \Active\UserService\findUsersByGroupIdAndGroupRoleId
     */
    public function setGroupId($groupId)
    {
      $this->groupId = $groupId;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserGroupRoleId()
    {
      return $this->userGroupRoleId;
    }

    /**
     * @param int $userGroupRoleId
     * @return \Active\UserService\findUsersByGroupIdAndGroupRoleId
     */
    public function setUserGroupRoleId($userGroupRoleId)
    {
      $this->userGroupRoleId = $userGroupRoleId;
      return $this;
    }

}
