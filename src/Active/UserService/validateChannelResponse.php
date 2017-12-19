<?php

namespace Active\UserService;

class validateChannelResponse
{

    /**
     * @var boolean $validateChannelResult
     */
    protected $validateChannelResult = null;

    /**
     * @param boolean $validateChannelResult
     */
    public function __construct($validateChannelResult)
    {
      $this->validateChannelResult = $validateChannelResult;
    }

    /**
     * @return boolean
     */
    public function getValidateChannelResult()
    {
      return $this->validateChannelResult;
    }

    /**
     * @param boolean $validateChannelResult
     * @return \Active\UserService\validateChannelResponse
     */
    public function setValidateChannelResult($validateChannelResult)
    {
      $this->validateChannelResult = $validateChannelResult;
      return $this;
    }

}
