<?php

namespace Active\UserService;

class makePrimary
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
     * @var string $id
     */
    protected $id = null;

    
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
     * @return \Active\UserService\makePrimary
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
     * @return \Active\UserService\makePrimary
     */
    public function setChannelType($channelType)
    {
      $this->channelType = $channelType;
      return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \Active\UserService\makePrimary
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

}
