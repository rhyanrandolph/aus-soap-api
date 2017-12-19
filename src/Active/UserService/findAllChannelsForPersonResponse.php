<?php

namespace Active\UserService;

class findAllChannelsForPersonResponse
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
     * @return \Active\UserService\findAllChannelsForPersonResponse
     */
    public function setChannelInfos(array $channelInfos = null)
    {
      $this->channelInfos = $channelInfos;
      return $this;
    }

}
