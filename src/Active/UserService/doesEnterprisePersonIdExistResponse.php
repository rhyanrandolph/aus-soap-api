<?php

namespace Active\UserService;

class doesEnterprisePersonIdExistResponse
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
     * @return \Active\UserService\doesEnterprisePersonIdExistResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
