<?php

namespace Active\UserService;

class emailAddress
{

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $userEmailAddress
     */
    protected $userEmailAddress = null;

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
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \Active\UserService\emailAddress
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \Active\UserService\emailAddress
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserEmailAddress()
    {
      return $this->userEmailAddress;
    }

    /**
     * @param string $userEmailAddress
     * @return \Active\UserService\emailAddress
     */
    public function setUserEmailAddress($userEmailAddress)
    {
      $this->userEmailAddress = $userEmailAddress;
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
     * @return \Active\UserService\emailAddress
     */
    public function setVerified($verified)
    {
      $this->verified = $verified;
      return $this;
    }

}
