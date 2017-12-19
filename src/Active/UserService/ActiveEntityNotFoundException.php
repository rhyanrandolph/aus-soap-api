<?php

namespace Active\UserService;

class ActiveEntityNotFoundException
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
     * @return \Active\UserService\ActiveEntityNotFoundException
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

}
