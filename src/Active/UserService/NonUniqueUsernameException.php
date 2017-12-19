<?php

namespace Active\UserService;

class NonUniqueUsernameException
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
     * @return \Active\UserService\NonUniqueUsernameException
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

}
