<?php

namespace Active\UserService;

abstract class domainObject extends valueObject
{

    /**
     * @var string $createdBy
     */
    protected $createdBy = null;

    /**
     * @var \DateTime $createdDate
     */
    protected $createdDate = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $modifiedBy
     */
    protected $modifiedBy = null;

    /**
     * @var \DateTime $modifiedDate
     */
    protected $modifiedDate = null;

    /**
     * @var int $version
     */
    protected $version = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCreatedBy()
    {
      return $this->createdBy;
    }

    /**
     * @param string $createdBy
     * @return \Active\UserService\domainObject
     */
    public function setCreatedBy($createdBy)
    {
      $this->createdBy = $createdBy;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
      if ($this->createdDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->createdDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $createdDate
     * @return \Active\UserService\domainObject
     */
    public function setCreatedDate(\DateTime $createdDate = null)
    {
      if ($createdDate == null) {
       $this->createdDate = null;
      } else {
        $this->createdDate = $createdDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Active\UserService\domainObject
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getModifiedBy()
    {
      return $this->modifiedBy;
    }

    /**
     * @param string $modifiedBy
     * @return \Active\UserService\domainObject
     */
    public function setModifiedBy($modifiedBy)
    {
      $this->modifiedBy = $modifiedBy;
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
     * @return \Active\UserService\domainObject
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
     * @return int
     */
    public function getVersion()
    {
      return $this->version;
    }

    /**
     * @param int $version
     * @return \Active\UserService\domainObject
     */
    public function setVersion($version)
    {
      $this->version = $version;
      return $this;
    }

}
