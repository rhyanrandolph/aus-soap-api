<?php

namespace Active\UserService;

class user
{

    /**
     * @var string $ageGroup
     */
    protected $ageGroup = null;

    /**
     * @var \DateTime $createdDate
     */
    protected $createdDate = null;

    /**
     * @var string $displayName
     */
    protected $displayName = null;

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
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $lastName
     */
    protected $lastName = null;

    /**
     * @var string $middleName
     */
    protected $middleName = null;

    /**
     * @var string[] $preferredLocales
     */
    protected $preferredLocales = null;

    /**
     * @var string $secretQuestion
     */
    protected $secretQuestion = null;

    /**
     * @var string $userName
     */
    protected $userName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAgeGroup()
    {
      return $this->ageGroup;
    }

    /**
     * @param string $ageGroup
     * @return \Active\UserService\user
     */
    public function setAgeGroup($ageGroup)
    {
      $this->ageGroup = $ageGroup;
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
     * @return \Active\UserService\user
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
     * @return string
     */
    public function getDisplayName()
    {
      return $this->displayName;
    }

    /**
     * @param string $displayName
     * @return \Active\UserService\user
     */
    public function setDisplayName($displayName)
    {
      $this->displayName = $displayName;
      return $this;
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
     * @return \Active\UserService\user
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
     * @return \Active\UserService\user
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
     * @return \Active\UserService\user
     */
    public function setGender($gender)
    {
      $this->gender = $gender;
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
     * @return \Active\UserService\user
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \Active\UserService\user
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
     * @return \Active\UserService\user
     */
    public function setMiddleName($middleName)
    {
      $this->middleName = $middleName;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getPreferredLocales()
    {
      return $this->preferredLocales;
    }

    /**
     * @param string[] $preferredLocales
     * @return \Active\UserService\user
     */
    public function setPreferredLocales(array $preferredLocales = null)
    {
      $this->preferredLocales = $preferredLocales;
      return $this;
    }

    /**
     * @return string
     */
    public function getSecretQuestion()
    {
      return $this->secretQuestion;
    }

    /**
     * @param string $secretQuestion
     * @return \Active\UserService\user
     */
    public function setSecretQuestion($secretQuestion)
    {
      $this->secretQuestion = $secretQuestion;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->userName;
    }

    /**
     * @param string $userName
     * @return \Active\UserService\user
     */
    public function setUserName($userName)
    {
      $this->userName = $userName;
      return $this;
    }

}
