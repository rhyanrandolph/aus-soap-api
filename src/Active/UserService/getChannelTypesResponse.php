<?php

namespace Active\UserService;

class getChannelTypesResponse
{

    /**
     * @var string[] $channelTypes
     */
    protected $channelTypes = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getChannelTypes()
    {
      return $this->channelTypes;
    }

    /**
     * @param string[] $channelTypes
     * @return \Active\UserService\getChannelTypesResponse
     */
    public function setChannelTypes(array $channelTypes = null)
    {
      $this->channelTypes = $channelTypes;
      return $this;
    }

}
