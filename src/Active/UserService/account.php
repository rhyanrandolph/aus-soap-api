<?php

namespace Active\UserService;

class account
{

    /**
     * @var string $displayName
     */
    protected $displayName = null;

    /**
     * @var string $secretQuestion
     */
    protected $secretQuestion = null;

    /**
     * @var string $userName
     */
    protected $userName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
      return $this->displayName;
    }

    /**
     * @param string $displayName
     * @return \Active\UserService\account
     */
    public function setDisplayName($displayName)
    {
      $this->displayName = $displayName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSecretQuestion()
    {
      return $this->secretQuestion;
    }

    /**
     * @param string $secretQuestion
     * @return \Active\UserService\account
     */
    public function setSecretQuestion($secretQuestion)
    {
      $this->secretQuestion = $secretQuestion;
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
     * @return \Active\UserService\account
     */
    public function setUserName($userName)
    {
      $this->userName = $userName;
      return $this;
    }

}
