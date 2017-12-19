<?php

namespace Active\UserService;

class getChannelStatuses
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
     * @return \Active\UserService\getChannelStatuses
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
