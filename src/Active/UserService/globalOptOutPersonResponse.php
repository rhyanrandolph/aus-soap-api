<?php

namespace Active\UserService;

class globalOptOutPersonResponse
{

    /**
     * @var boolean $personOptOut
     */
    protected $personOptOut = null;

    /**
     * @param boolean $personOptOut
     */
    public function __construct($personOptOut)
    {
      $this->personOptOut = $personOptOut;
    }

    /**
     * @return boolean
     */
    public function getPersonOptOut()
    {
      return $this->personOptOut;
    }

    /**
     * @param boolean $personOptOut
     * @return \Active\UserService\globalOptOutPersonResponse
     */
    public function setPersonOptOut($personOptOut)
    {
      $this->personOptOut = $personOptOut;
      return $this;
    }

}
