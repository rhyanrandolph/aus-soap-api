<?php

namespace Active\UserService;

class setSecretQuestion
{

    /**
     * @var contextDefaultImpl $context
     */
    protected $context = null;

    /**
     * @var string $userId
     */
    protected $userId = null;

    /**
     * @var string $secretQuestion
     */
    protected $secretQuestion = null;

    /**
     * @var string $secretQuestionAnswer
     */
    protected $secretQuestionAnswer = null;

    
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
     * @return \Active\UserService\setSecretQuestion
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
      return $this->userId;
    }

    /**
     * @param string $userId
     * @return \Active\UserService\setSecretQuestion
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
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
     * @return \Active\UserService\setSecretQuestion
     */
    public function setSecretQuestion($secretQuestion)
    {
      $this->secretQuestion = $secretQuestion;
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
     * @return \Active\UserService\setSecretQuestion
     */
    public function setSecretQuestionAnswer($secretQuestionAnswer)
    {
      $this->secretQuestionAnswer = $secretQuestionAnswer;
      return $this;
    }

}
