<?php

namespace Active\UserService;

class updateAccountPasswordWithToken
{

    /**
     * @var contextDefaultImpl $context
     */
    protected $context = null;

    /**
     * @var string $userName
     */
    protected $userName = null;

    /**
     * @var string $token
     */
    protected $token = null;

    /**
     * @var string $newPassword
     */
    protected $newPassword = null;

    /**
     * @var SenderType $sender
     */
    protected $sender = null;

    /**
     * @var string $passportClientUrl
     */
    protected $passportClientUrl = null;

    
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
     * @return \Active\UserService\updateAccountPasswordWithToken
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->userName;
    }

    /**
     * @param string $userName
     * @return \Active\UserService\updateAccountPasswordWithToken
     */
    public function setUserName($userName)
    {
      $this->userName = $userName;
      return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
      return $this->token;
    }

    /**
     * @param string $token
     * @return \Active\UserService\updateAccountPasswordWithToken
     */
    public function setToken($token)
    {
      $this->token = $token;
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
     * @return \Active\UserService\updateAccountPasswordWithToken
     */
    public function setNewPassword($newPassword)
    {
      $this->newPassword = $newPassword;
      return $this;
    }

    /**
     * @return SenderType
     */
    public function getSender()
    {
      return $this->sender;
    }

    /**
     * @param SenderType $sender
     * @return \Active\UserService\updateAccountPasswordWithToken
     */
    public function setSender($sender)
    {
      $this->sender = $sender;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassportClientUrl()
    {
      return $this->passportClientUrl;
    }

    /**
     * @param string $passportClientUrl
     * @return \Active\UserService\updateAccountPasswordWithToken
     */
    public function setPassportClientUrl($passportClientUrl)
    {
      $this->passportClientUrl = $passportClientUrl;
      return $this;
    }

}
