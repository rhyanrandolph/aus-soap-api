<?php

namespace Active\UserService;

class addUserToGroup
{

    /**
     * @var contextDefaultImpl $context
     */
    protected $context = null;

    /**
     * @var string $userId
     */
    protected $userId = null;

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
     * @return \Active\UserService\addUserToGroup
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
      return $this->userId;
    }

    /**
     * @param string $userId
     * @return \Active\UserService\addUserToGroup
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
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
     * @return \Active\UserService\addUserToGroup
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
     * @return \Active\UserService\addUserToGroup
     */
    public function setUserGroupRoleId($userGroupRoleId)
    {
      $this->userGroupRoleId = $userGroupRoleId;
      return $this;
    }

}
