<?php

namespace Active\UserService;

class createUser
{

    /**
     * @var contextDefaultImpl $context
     */
    protected $context = null;

    /**
     * @var account $account
     */
    protected $account = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $secretQuestionAnswer
     */
    protected $secretQuestionAnswer = null;

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
     * @return \Active\UserService\createUser
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

    /**
     * @return account
     */
    public function getAccount()
    {
      return $this->account;
    }

    /**
     * @param account $account
     * @return \Active\UserService\createUser
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \Active\UserService\createUser
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getSecretQuestionAnswer()
    {
      return $this->secretQuestionAnswer;
    }

    /**
     * @param string $secretQuestionAnswer
     * @return \Active\UserService\createUser
     */
    public function setSecretQuestionAnswer($secretQuestionAnswer)
    {
      $this->secretQuestionAnswer = $secretQuestionAnswer;
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
     * @return \Active\UserService\createUser
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
     * @return \Active\UserService\createUser
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
     * @return \Active\UserService\createUser
     */
    public function setPhoneNumbers($phoneNumbers)
    {
      $this->phoneNumbers = $phoneNumbers;
      return $this;
    }

}
