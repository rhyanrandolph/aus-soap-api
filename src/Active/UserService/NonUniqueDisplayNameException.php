<?php

namespace Active\UserService;

class NonUniqueDisplayNameException
{

    /**
     * @var string $message
     */
    protected $message = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return \Active\UserService\NonUniqueDisplayNameException
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

}
