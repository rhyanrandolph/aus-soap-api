<?php

namespace Active\UserService;

class getChannelStatusesResponse
{

    /**
     * @var string[] $channelStatus
     */
    protected $channelStatus = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getChannelStatus()
    {
      return $this->channelStatus;
    }

    /**
     * @param string[] $channelStatus
     * @return \Active\UserService\getChannelStatusesResponse
     */
    public function setChannelStatus(array $channelStatus = null)
    {
      $this->channelStatus = $channelStatus;
      return $this;
    }

}
