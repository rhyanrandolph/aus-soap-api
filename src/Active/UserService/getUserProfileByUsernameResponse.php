<?php

namespace Active\UserService;

class getUserProfileByUsernameResponse
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
     * @return \Active\UserService\getUserProfileByUsernameResponse
     */
    public function setProfile($profile)
    {
      $this->profile = $profile;
      return $this;
    }

}
