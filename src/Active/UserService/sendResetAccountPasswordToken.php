<?php

namespace Active\UserService;

class sendResetAccountPasswordToken
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
     * @var SenderType $sender
     */
    protected $sender = null;

    /**
     * @var string $passportClientUrl
     */
    protected $passportClientUrl = null;

    /**
     * @var string $localeId
     */
    protected $localeId = null;

    /**
     * @var string $passwordResetUrl
     */
    protected $passwordResetUrl = null;

    
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
     * @return \Active\UserService\sendResetAccountPasswordToken
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
     * @return \Active\UserService\sendResetAccountPasswordToken
     */
    public function setUserName($userName)
    {
      $this->userName = $userName;
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
     * @return \Active\UserService\sendResetAccountPasswordToken
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
     * @return \Active\UserService\sendResetAccountPasswordToken
     */
    public function setPassportClientUrl($passportClientUrl)
    {
      $this->passportClientUrl = $passportClientUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocaleId()
    {
      return $this->localeId;
    }

    /**
     * @param string $localeId
     * @return \Active\UserService\sendResetAccountPasswordToken
     */
    public function setLocaleId($localeId)
    {
      $this->localeId = $localeId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPasswordResetUrl()
    {
      return $this->passwordResetUrl;
    }

    /**
     * @param string $passwordResetUrl
     * @return \Active\UserService\sendResetAccountPasswordToken
     */
    public function setPasswordResetUrl($passwordResetUrl)
    {
      $this->passwordResetUrl = $passwordResetUrl;
      return $this;
    }

}
