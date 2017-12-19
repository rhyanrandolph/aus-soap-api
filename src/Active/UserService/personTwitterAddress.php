<?php

namespace Active\UserService;

class personTwitterAddress
{

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var \DateTime $modifiedDate
     */
    protected $modifiedDate = null;

    /**
     * @var string $ownerId
     */
    protected $ownerId = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $twitterAddress
     */
    protected $twitterAddress = null;

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
     * @return \Active\UserService\personTwitterAddress
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedDate()
    {
      if ($this->modifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->modifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $modifiedDate
     * @return \Active\UserService\personTwitterAddress
     */
    public function setModifiedDate(\DateTime $modifiedDate = null)
    {
      if ($modifiedDate == null) {
       $this->modifiedDate = null;
      } else {
        $this->modifiedDate = $modifiedDate->format(\DateTime::ATOM);
      }
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
     * @return \Active\UserService\personTwitterAddress
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
     * @return \Active\UserService\personTwitterAddress
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getTwitterAddress()
    {
      return $this->twitterAddress;
    }

    /**
     * @param string $twitterAddress
     * @return \Active\UserService\personTwitterAddress
     */
    public function setTwitterAddress($twitterAddress)
    {
      $this->twitterAddress = $twitterAddress;
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
     * @return \Active\UserService\personTwitterAddress
     */
    public function setVerified($verified)
    {
      $this->verified = $verified;
      return $this;
    }

}
