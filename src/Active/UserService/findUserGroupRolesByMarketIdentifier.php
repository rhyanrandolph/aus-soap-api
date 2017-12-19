<?php

namespace Active\UserService;

class findUserGroupRolesByMarketIdentifier
{

    /**
     * @var contextDefaultImpl $context
     */
    protected $context = null;

    /**
     * @var string $marketIdentifier
     */
    protected $marketIdentifier = null;

    
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
     * @return \Active\UserService\findUserGroupRolesByMarketIdentifier
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

    /**
     * @return string
     */
    public function getMarketIdentifier()
    {
      return $this->marketIdentifier;
    }

    /**
     * @param string $marketIdentifier
     * @return \Active\UserService\findUserGroupRolesByMarketIdentifier
     */
    public function setMarketIdentifier($marketIdentifier)
    {
      $this->marketIdentifier = $marketIdentifier;
      return $this;
    }

}
