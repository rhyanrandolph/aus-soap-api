<?php

namespace Active\UserService;

class findGroupRoleMappingsByPerson
{

    /**
     * @var contextDefaultImpl $context
     */
    protected $context = null;

    /**
     * @var string $personId
     */
    protected $personId = null;

    
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
     * @return \Active\UserService\findGroupRoleMappingsByPerson
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

    /**
     * @return string
     */
    public function getPersonId()
    {
      return $this->personId;
    }

    /**
     * @param string $personId
     * @return \Active\UserService\findGroupRoleMappingsByPerson
     */
    public function setPersonId($personId)
    {
      $this->personId = $personId;
      return $this;
    }

}
