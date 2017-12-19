<?php

namespace Active\UserService;

class IllegalArgumentException
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
     * @return \Active\UserService\IllegalArgumentException
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

}
