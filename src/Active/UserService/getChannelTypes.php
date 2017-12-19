<?php

namespace Active\UserService;

class getChannelTypes
{

    /**
     * @var contextDefaultImpl $context
     */
    protected $context = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return contextDefaultImpl
     */
    public function getContext()
    {
      return $this->context;
    }

    /**
     * @param contextDefaultImpl $context
     * @return \Active\UserService\getChannelTypes
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
