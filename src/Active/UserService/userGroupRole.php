<?php

namespace Active\UserService;

class userGroupRole
{

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $marketIdentifier
     */
    protected $marketIdentifier = null;

    /**
     * @var int $maxNumber
     */
    protected $maxNumber = null;

    /**
     * @var string $name
     */
    protected $name = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Active\UserService\userGroupRole
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \Active\UserService\userGroupRole
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getMarketIdentifier()
    {
      return $this->marketIdentifier;
    }

    /**
     * @param string $marketIdentifier
     * @return \Active\UserService\userGroupRole
     */
    public function setMarketIdentifier($marketIdentifier)
    {
      $this->marketIdentifier = $marketIdentifier;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxNumber()
    {
      return $this->maxNumber;
    }

    /**
     * @param int $maxNumber
     * @return \Active\UserService\userGroupRole
     */
    public function setMaxNumber($maxNumber)
    {
      $this->maxNumber = $maxNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Active\UserService\userGroupRole
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
