<?php

namespace Active\UserService;

class externalAccount extends domainObject
{

    /**
     * @var string $accountId
     */
    protected $accountId = null;

    /**
     * @var string $enterprisePersonId
     */
    protected $enterprisePersonId = null;

    /**
     * @var accountNameSpace $nameSpace
     */
    protected $nameSpace = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \Active\UserService\externalAccount
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return string
     */
    public function getEnterprisePersonId()
    {
      return $this->enterprisePersonId;
    }

    /**
     * @param string $enterprisePersonId
     * @return \Active\UserService\externalAccount
     */
    public function setEnterprisePersonId($enterprisePersonId)
    {
      $this->enterprisePersonId = $enterprisePersonId;
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
     * @return \Active\UserService\externalAccount
     */
    public function setNameSpace($nameSpace)
    {
      $this->nameSpace = $nameSpace;
      return $this;
    }

}
