<?php

namespace Active\UserService;

class channelInfo
{

    /**
     * @var string $channelAddress
     */
    protected $channelAddress = null;

    /**
     * @var string $channelId
     */
    protected $channelId = null;

    /**
     * @var string $channelType
     */
    protected $channelType = null;

    /**
     * @var string $ownerId
     */
    protected $ownerId = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var boolean $verified
     */
    protected $verified = null;

    /**
     * @param boolean $verified
     */
    public function __construct($verified)
    {
      $this->verified = $verified;
    }

    /**
     * @return string
     */
    public function getChannelAddress()
    {
      return $this->channelAddress;
    }

    /**
     * @param string $channelAddress
     * @return \Active\UserService\channelInfo
     */
    public function setChannelAddress($channelAddress)
    {
      $this->channelAddress = $channelAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getChannelId()
    {
      return $this->channelId;
    }

    /**
     * @param string $channelId
     * @return \Active\UserService\channelInfo
     */
    public function setChannelId($channelId)
    {
      $this->channelId = $channelId;
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
     * @return \Active\UserService\channelInfo
     */
    public function setChannelType($channelType)
    {
      $this->channelType = $channelType;
      return $this;
    }

    /**
     * @return string
     */
    public function getOwnerId()
    {
      return $this->ownerId;
    }

    /**
     * @param string $ownerId
     * @return \Active\UserService\channelInfo
     */
    public function setOwnerId($ownerId)
    {
      $this->ownerId = $ownerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Active\UserService\channelInfo
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getVerified()
    {
      return $this->verified;
    }

    /**
     * @param boolean $verified
     * @return \Active\UserService\channelInfo
     */
    public function setVerified($verified)
    {
      $this->verified = $verified;
      return $this;
    }

}
