<?php

namespace Active\UserService;

class makePreferred
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
     * @var string $userId
     */
    protected $userId = null;

    
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
     * @return \Active\UserService\makePreferred
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
     * @return \Active\UserService\makePreferred
     */
    public function setChannelType($channelType)
    {
      $this->channelType = $channelType;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
      return $this->userId;
    }

    /**
     * @param string $userId
     * @return \Active\UserService\makePreferred
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

}
