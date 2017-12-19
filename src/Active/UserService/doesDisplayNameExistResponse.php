<?php

namespace Active\UserService;

class doesDisplayNameExistResponse
{

    /**
     * @var boolean $return
     */
    protected $return = null;

    /**
     * @param boolean $return
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

    /**
     * @return boolean
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param boolean $return
     * @return \Active\UserService\doesDisplayNameExistResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
