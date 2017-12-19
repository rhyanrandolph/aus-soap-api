<?php

namespace Active\UserService;

class person
{

    /**
     * @var \DateTime $dob
     */
    protected $dob = null;

    /**
     * @var string $firstName
     */
    protected $firstName = null;

    /**
     * @var gender $gender
     */
    protected $gender = null;

    /**
     * @var string $lastName
     */
    protected $lastName = null;

    /**
     * @var string $middleName
     */
    protected $middleName = null;

    /**
     * @var string $suffix
     */
    protected $suffix = null;

    /**
     * @var string $title
     */
    protected $title = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getDob()
    {
      if ($this->dob == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dob);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dob
     * @return \Active\UserService\person
     */
    public function setDob(\DateTime $dob = null)
    {
      if ($dob == null) {
       $this->dob = null;
      } else {
        $this->dob = $dob->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return \Active\UserService\person
     */
    public function setFirstName($firstName)
    {
      $this->firstName = $firstName;
      return $this;
    }

    /**
     * @return gender
     */
    public function getGender()
    {
      return $this->gender;
    }

    /**
     * @param gender $gender
     * @return \Active\UserService\person
     */
    public function setGender($gender)
    {
      $this->gender = $gender;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return \Active\UserService\person
     */
    public function setLastName($lastName)
    {
      $this->lastName = $lastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
      return $this->middleName;
    }

    /**
     * @param string $middleName
     * @return \Active\UserService\person
     */
    public function setMiddleName($middleName)
    {
      $this->middleName = $middleName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSuffix()
    {
      return $this->suffix;
    }

    /**
     * @param string $suffix
     * @return \Active\UserService\person
     */
    public function setSuffix($suffix)
    {
      $this->suffix = $suffix;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param string $title
     * @return \Active\UserService\person
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

}
