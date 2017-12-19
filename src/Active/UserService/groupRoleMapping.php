<?php

namespace Active\UserService;

class groupRoleMapping
{

    /**
     * @var string $groupId
     */
    protected $groupId = null;

    /**
     * @var userGroupRole $groupRole
     */
    protected $groupRole = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var user $user
     */
    protected $user = null;

    
    public function __construct()
    {
    
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
     * @return \Active\UserService\groupRoleMapping
     */
    public function setGroupId($groupId)
    {
      $this->groupId = $groupId;
      return $this;
    }

    /**
     * @return userGroupRole
     */
    public function getGroupRole()
    {
      return $this->groupRole;
    }

    /**
     * @param userGroupRole $groupRole
     * @return \Active\UserService\groupRoleMapping
     */
    public function setGroupRole($groupRole)
    {
      $this->groupRole = $groupRole;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Active\UserService\groupRoleMapping
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return user
     */
    public function getUser()
    {
      return $this->user;
    }

    /**
     * @param user $user
     * @return \Active\UserService\groupRoleMapping
     */
    public function setUser($user)
    {
      $this->user = $user;
      return $this;
    }

}
