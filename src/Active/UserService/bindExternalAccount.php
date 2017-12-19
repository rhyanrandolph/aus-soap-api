<?php

namespace Active\UserService;

class bindExternalAccount
{

    /**
     * @var contextDefaultImpl $context
     */
    protected $context = null;

    /**
     * @var accountNameSpace $nameSpace
     */
    protected $nameSpace = null;

    /**
     * @var string $accountId
     */
    protected $accountId = null;

    /**
     * @var string $userName
     */
    protected $userName = null;

    
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
     * @return \Active\UserService\bindExternalAccount
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

    /**
     * @return accountNameSpace
     */
    public function getNameSpace()
    {
      return $this->nameSpace;
    }

    /**
     * @param accountNameSpace $nameSpace
     * @return \Active\UserService\bindExternalAccount
     */
    public function setNameSpace($nameSpace)
    {
      $this->nameSpace = $nameSpace;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountId()
    {
      return $this->accountId;
    }

    /**
     * @param string $accountId
     * @return \Active\UserService\bindExternalAccount
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
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
     * @return \Active\UserService\bindExternalAccount
     */
    public function setUserName($userName)
    {
      $this->userName = $userName;
      return $this;
    }

}
