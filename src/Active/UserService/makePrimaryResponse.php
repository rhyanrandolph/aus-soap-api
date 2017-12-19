<?php

namespace Active\UserService;

class makePrimaryResponse
{

    /**
     * @var boolean $setPrimary
     */
    protected $setPrimary = null;

    /**
     * @param boolean $setPrimary
     */
    public function __construct($setPrimary)
    {
      $this->setPrimary = $setPrimary;
    }

    /**
     * @return boolean
     */
    public function getSetPrimary()
    {
      return $this->setPrimary;
    }

    /**
     * @param boolean $setPrimary
     * @return \Active\UserService\makePrimaryResponse
     */
    public function setSetPrimary($setPrimary)
    {
      $this->setPrimary = $setPrimary;
      return $this;
    }

}
