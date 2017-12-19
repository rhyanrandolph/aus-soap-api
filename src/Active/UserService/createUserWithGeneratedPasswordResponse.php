<?php

namespace Active\UserService;

class createUserWithGeneratedPasswordResponse
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
     * @return \Active\UserService\createUserWithGeneratedPasswordResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
