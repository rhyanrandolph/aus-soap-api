<?php

namespace Active\UserService;

class findTwitterAddressByIdResponse
{

    /**
     * @var personTwitterAddress $twitterAddress
     */
    protected $twitterAddress = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return personTwitterAddress
     */
    public function getTwitterAddress()
    {
      return $this->twitterAddress;
    }

    /**
     * @param personTwitterAddress $twitterAddress
     * @return \Active\UserService\findTwitterAddressByIdResponse
     */
    public function setTwitterAddress($twitterAddress)
    {
      $this->twitterAddress = $twitterAddress;
      return $this;
    }

}
