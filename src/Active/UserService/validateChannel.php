<?php

namespace Active\UserService;

class validateChannel
{

    /**
     * @var contextDefaultImpl $context
     */
    protected $context = null;

    /**
     * @var string $channelType
     */
    protected $channelType = null;

    /**
     * @var string $token
     */
    protected $token = null;

    
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
     * @return \Active\UserService\validateChannel
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

    /**
     * @return string
     */
    public function getChannelType()
    {
      return $this->channelType;
    }

    /**
     * @param string $channelType
     * @return \Active\UserService\validateChannel
     */
    public function setChannelType($channelType)
    {
      $this->channelType = $channelType;
      return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
      return $this->token;
    }

    /**
     * @param string $token
     * @return \Active\UserService\validateChannel
     */
    public function setToken($token)
    {
      $this->token = $token;
      return $this;
    }

}
