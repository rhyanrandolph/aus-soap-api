<?php

namespace Active\UserService;

class address
{

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $countryCode
     */
    protected $countryCode = null;

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $line1
     */
    protected $line1 = null;

    /**
     * @var string $line2
     */
    protected $line2 = null;

    /**
     * @var string $postalCode
     */
    protected $postalCode = null;

    /**
     * @var string $province
     */
    protected $province = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param string $city
     * @return \Active\UserService\address
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return \Active\UserService\address
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
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
     * @return \Active\UserService\address
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getLine1()
    {
      return $this->line1;
    }

    /**
     * @param string $line1
     * @return \Active\UserService\address
     */
    public function setLine1($line1)
    {
      $this->line1 = $line1;
      return $this;
    }

    /**
     * @return string
     */
    public function getLine2()
    {
      return $this->line2;
    }

    /**
     * @param string $line2
     * @return \Active\UserService\address
     */
    public function setLine2($line2)
    {
      $this->line2 = $line2;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return \Active\UserService\address
     */
    public function setPostalCode($postalCode)
    {
      $this->postalCode = $postalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getProvince()
    {
      return $this->province;
    }

    /**
     * @param string $province
     * @return \Active\UserService\address
     */
    public function setProvince($province)
    {
      $this->province = $province;
      return $this;
    }

}
