<?php

namespace Active\UserService;

class getUserProfileByEnterprisePersonIdResponse
{

    /**
     * @var userProfile $profile
     */
    protected $profile = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return userProfile
     */
    public function getProfile()
    {
      return $this->profile;
    }

    /**
     * @param userProfile $profile
     * @return \Active\UserService\getUserProfileByEnterprisePersonIdResponse
     */
    public function setProfile($profile)
    {
      $this->profile = $profile;
      return $this;
    }

}
