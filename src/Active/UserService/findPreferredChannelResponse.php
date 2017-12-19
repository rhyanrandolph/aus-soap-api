<?php

namespace Active\UserService;

class findPreferredChannelResponse
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
     * @return \Active\UserService\findPreferredChannelResponse
     */
    public function setChannelInfo($channelInfo)
    {
      $this->channelInfo = $channelInfo;
      return $this;
    }

}
