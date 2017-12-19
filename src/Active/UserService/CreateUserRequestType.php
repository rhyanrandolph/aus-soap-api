<?php

namespace Active\UserService;

class CreateUserRequestType
{

    /**
     * @var string $version
     */
    protected $version = null;

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

    /**
     * @var preferredLocales $preferredLocales
     */
    protected $preferredLocales = null;

    /**
     * @param string $version
     * @param account $account
     * @param string $password
     * @param person $person
     */
    public function __construct($version, $account, $password, $person)
    {
      $this->version = $version;
      $this->account = $account;
      $this->password = $password;
      $this->person = $person;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
      return $this->version;
    }

    /**
     * @param string $version
     * @return \Active\UserService\CreateUserRequestType
     */
    public function setVersion($version)
    {
      $this->version = $version;
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
     * @return \Active\UserService\CreateUserRequestType
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
     * @return \Active\UserService\CreateUserRequestType
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
     * @return \Active\UserService\CreateUserRequestType
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
     * @return \Active\UserService\CreateUserRequestType
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
     * @return \Active\UserService\CreateUserRequestType
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
     * @return \Active\UserService\CreateUserRequestType
     */
    public function setPhoneNumbers($phoneNumbers)
    {
      $this->phoneNumbers = $phoneNumbers;
      return $this;
    }

    /**
     * @return preferredLocales
     */
    public function getPreferredLocales()
    {
      return $this->preferredLocales;
    }

    /**
     * @param preferredLocales $preferredLocales
     * @return \Active\UserService\CreateUserRequestType
     */
    public function setPreferredLocales($preferredLocales)
    {
      $this->preferredLocales = $preferredLocales;
      return $this;
    }

}
