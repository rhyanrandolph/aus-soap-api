<?php

namespace Active\UserService;

class findPrimaryChannelsResponse
{

    /**
     * @var channelInfo[] $channelInfos
     */
    protected $channelInfos = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return channelInfo[]
     */
    public function getChannelInfos()
    {
      return $this->channelInfos;
    }

    /**
     * @param channelInfo[] $channelInfos
     * @return \Active\UserService\findPrimaryChannelsResponse
     */
    public function setChannelInfos(array $channelInfos = null)
    {
      $this->channelInfos = $channelInfos;
      return $this;
    }

}
