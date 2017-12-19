<?php

namespace Active\UserService;

class createPerson
{

    /**
     * @var contextDefaultImpl $context
     */
    protected $context = null;

    /**
     * @var person $person
     */
    protected $person = null;

    /**
     * @var addresses $addresses
     */
    protected $addresses = null;

    /**
     * @var phoneNumbers $phoneNumbers
     */
    protected $phoneNumbers = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return contextDefaultImpl
     */
    public function getContext()
    {
      return $this->context;
    }

    /**
     * @param contextDefaultImpl $context
     * @return \Active\UserService\createPerson
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

    /**
     * @return person
     */
    public function getPerson()
    {
      return $this->person;
    }

    /**
     * @param person $person
     * @return \Active\UserService\createPerson
     */
    public function setPerson($person)
    {
      $this->person = $person;
      return $this;
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
     * @return \Active\UserService\createPerson
     */
    public function setAddresses($addresses)
    {
      $this->addresses = $addresses;
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
     * @return \Active\UserService\createPerson
     */
    public function setPhoneNumbers($phoneNumbers)
    {
      $this->phoneNumbers = $phoneNumbers;
      return $this;
    }

}
