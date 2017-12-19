<?php

namespace Active\UserService;

class createUserNoEmailResponse
{

    /**
     * @var CreateUserResultType $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CreateUserResultType
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param CreateUserResultType $return
     * @return \Active\UserService\createUserNoEmailResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
