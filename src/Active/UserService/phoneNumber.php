<?php

namespace Active\UserService;

class phoneNumber
{

    /**
     * @var string $extension
     */
    protected $extension = null;

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $number
     */
    protected $number = null;

    /**
     * @var boolean $smsCapable
     */
    protected $smsCapable = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var boolean $verified
     */
    protected $verified = null;

    /**
     * @param boolean $smsCapable
     * @param boolean $verified
     */
    public function __construct($smsCapable, $verified)
    {
      $this->smsCapable = $smsCapable;
      $this->verified = $verified;
    }

    /**
     * @return string
     */
    public function getExtension()
    {
      return $this->extension;
    }

    /**
     * @param string $extension
     * @return \Active\UserService\phoneNumber
     */
    public function setExtension($extension)
    {
      $this->extension = $extension;
      return $this;
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
     * @return \Active\UserService\phoneNumber
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param string $number
     * @return \Active\UserService\phoneNumber
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSmsCapable()
    {
      return $this->smsCapable;
    }

    /**
     * @param boolean $smsCapable
     * @return \Active\UserService\phoneNumber
     */
    public function setSmsCapable($smsCapable)
    {
      $this->smsCapable = $smsCapable;
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
     * @return \Active\UserService\phoneNumber
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
     * @return \Active\UserService\phoneNumber
     */
    public function setVerified($verified)
    {
      $this->verified = $verified;
      return $this;
    }

}
