<?php

namespace Active\UserService;

class findChannelByTypeAndIdResponse
{

    /**
     * @var channelInfo $channelInfo
     */
    protected $channelInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return channelInfo
     */
    public function getChannelInfo()
    {
      return $this->channelInfo;
    }

    /**
     * @param channelInfo $channelInfo
     * @return \Active\UserService\findChannelByTypeAndIdResponse
     */
    public function setChannelInfo($channelInfo)
    {
      $this->channelInfo = $channelInfo;
      return $this;
    }

}
