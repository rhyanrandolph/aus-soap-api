<?php

namespace Active\UserService;

class getUserProfileByEnterprisePersonId
{

    /**
     * @var contextDefaultImpl $context
     */
    protected $context = null;

    /**
     * @var string $enterprisePersonId
     */
    protected $enterprisePersonId = null;

    
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
     * @return \Active\UserService\getUserProfileByEnterprisePersonId
     */
    public function setContext($context)
    {
      $this->context = $context;
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
     * @return \Active\UserService\getUserProfileByEnterprisePersonId
     */
    public function setEnterprisePersonId($enterprisePersonId)
    {
      $this->enterprisePersonId = $enterprisePersonId;
      return $this;
    }

}
