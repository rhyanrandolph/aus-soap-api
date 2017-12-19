<?php

namespace Active\UserService;

class userProfile
{

    /**
     * @var addresses $addresses
     */
    protected $addresses = null;

    /**
     * @var emailAddresses $emailAddresses
     */
    protected $emailAddresses = null;

    /**
     * @var phoneNumbers $phoneNumbers
     */
    protected $phoneNumbers = null;

    /**
     * @var user $user
     */
    protected $user = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return addresses
     */
    public function getAddresses()
    {
      return $this->addresses;
    }

    /**
     * @param addresses $addresses
     * @return \Active\UserService\userProfile
     */
    public function setAddresses($addresses)
    {
      $this->addresses = $addresses;
      return $this;
    }

    /**
     * @return emailAddresses
     */
    public function getEmailAddresses()
    {
      return $this->emailAddresses;
    }

    /**
     * @param emailAddresses $emailAddresses
     * @return \Active\UserService\userProfile
     */
    public function setEmailAddresses($emailAddresses)
    {
      $this->emailAddresses = $emailAddresses;
      return $this;
    }

    /**
     * @return phoneNumbers
     */
    public function getPhoneNumbers()
    {
      return $this->phoneNumbers;
    }

    /**
     * @param phoneNumbers $phoneNumbers
     * @return \Active\UserService\userProfile
     */
    public function setPhoneNumbers($phoneNumbers)
    {
      $this->phoneNumbers = $phoneNumbers;
      return $this;
    }

    /**
     * @return user
     */
    public function getUser()
    {
      return $this->user;
    }

    /**
     * @param user $user
     * @return \Active\UserService\userProfile
     */
    public function setUser($user)
    {
      $this->user = $user;
      return $this;
    }

}
