<?php

namespace Active\UserService;

class SenderType
{

    /**
     * @var string $registeredSenderId
     */
    protected $registeredSenderId = null;

    /**
     * @var string $subSenderId
     */
    protected $subSenderId = null;

    /**
     * @param string $registeredSenderId
     * @param string $subSenderId
     */
    public function __construct($registeredSenderId, $subSenderId)
    {
      $this->registeredSenderId = $registeredSenderId;
      $this->subSenderId = $subSenderId;
    }

    /**
     * @return string
     */
    public function getRegisteredSenderId()
    {
      return $this->registeredSenderId;
    }

    /**
     * @param string $registeredSenderId
     * @return \Active\UserService\SenderType
     */
    public function setRegisteredSenderId($registeredSenderId)
    {
      $this->registeredSenderId = $registeredSenderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubSenderId()
    {
      return $this->subSenderId;
    }

    /**
     * @param string $subSenderId
     * @return \Active\UserService\SenderType
     */
    public function setSubSenderId($subSenderId)
    {
      $this->subSenderId = $subSenderId;
      return $this;
    }

}
