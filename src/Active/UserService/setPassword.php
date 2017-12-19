<?php

namespace Active\UserService;

class setPassword
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
     * @var string $currentPassword
     */
    protected $currentPassword = null;

    /**
     * @var string $newPassword
     */
    protected $newPassword = null;

    
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
     * @return \Active\UserService\setPassword
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
     * @return \Active\UserService\setPassword
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrentPassword()
    {
      return $this->currentPassword;
    }

    /**
     * @param string $currentPassword
     * @return \Active\UserService\setPassword
     */
    public function setCurrentPassword($currentPassword)
    {
      $this->currentPassword = $currentPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewPassword()
    {
      return $this->newPassword;
    }

    /**
     * @param string $newPassword
     * @return \Active\UserService\setPassword
     */
    public function setNewPassword($newPassword)
    {
      $this->newPassword = $newPassword;
      return $this;
    }

}
