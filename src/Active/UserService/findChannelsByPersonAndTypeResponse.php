<?php

namespace Active\UserService;

class findChannelsByPersonAndTypeResponse
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
     * @return \Active\UserService\findChannelsByPersonAndTypeResponse
     */
    public function setChannelInfos(array $channelInfos = null)
    {
      $this->channelInfos = $channelInfos;
      return $this;
    }

}
