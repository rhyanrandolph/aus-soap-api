<?php

namespace Active\UserService;

class contextDefaultImpl
{

    /**
     * @var string $callerIp
     */
    protected $callerIp = null;

    /**
     * @var string $applicationId
     */
    protected $applicationId = null;

    /**
     * @var string $actionId
     */
    protected $actionId = null;

    /**
     * @var string $actorId
     */
    protected $actorId = null;

    /**
     * @var string $onBehalfOfId
     */
    protected $onBehalfOfId = null;

    /**
     * @var string $onBelhalfOfId
     */
    protected $onBelhalfOfId = null;

    /**
     * @var string $enterpriseActorId
     */
    protected $enterpriseActorId = null;

    /**
     * @var string $agencyId
     */
    protected $agencyId = null;

    /**
     * @var int $agencyIdLong
     */
    protected $agencyIdLong = null;

    /**
     * @var int $externalClientId
     */
    protected $externalClientId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCallerIp()
    {
      return $this->callerIp;
    }

    /**
     * @param string $callerIp
     * @return \Active\UserService\contextDefaultImpl
     */
    public function setCallerIp($callerIp)
    {
      $this->callerIp = $callerIp;
      return $this;
    }

    /**
     * @return string
     */
    public function getApplicationId()
    {
      return $this->applicationId;
    }

    /**
     * @param string $applicationId
     * @return \Active\UserService\contextDefaultImpl
     */
    public function setApplicationId($applicationId)
    {
      $this->applicationId = $applicationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getActionId()
    {
      return $this->actionId;
    }

    /**
     * @param string $actionId
     * @return \Active\UserService\contextDefaultImpl
     */
    public function setActionId($actionId)
    {
      $this->actionId = $actionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getActorId()
    {
      return $this->actorId;
    }

    /**
     * @param string $actorId
     * @return \Active\UserService\contextDefaultImpl
     */
    public function setActorId($actorId)
    {
      $this->actorId = $actorId;
      return $this;
    }

    /**
     * @return string
     */
    public function getOnBehalfOfId()
    {
      return $this->onBehalfOfId;
    }

    /**
     * @param string $onBehalfOfId
     * @return \Active\UserService\contextDefaultImpl
     */
    public function setOnBehalfOfId($onBehalfOfId)
    {
      $this->onBehalfOfId = $onBehalfOfId;
      return $this;
    }

    /**
     * @return string
     */
    public function getOnBelhalfOfId()
    {
      return $this->onBelhalfOfId;
    }

    /**
     * @param string $onBelhalfOfId
     * @return \Active\UserService\contextDefaultImpl
     */
    public function setOnBelhalfOfId($onBelhalfOfId)
    {
      $this->onBelhalfOfId = $onBelhalfOfId;
      return $this;
    }

    /**
     * @return string
     */
    public function getEnterpriseActorId()
    {
      return $this->enterpriseActorId;
    }

    /**
     * @param string $enterpriseActorId
     * @return \Active\UserService\contextDefaultImpl
     */
    public function setEnterpriseActorId($enterpriseActorId)
    {
      $this->enterpriseActorId = $enterpriseActorId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAgencyId()
    {
      return $this->agencyId;
    }

    /**
     * @param string $agencyId
     * @return \Active\UserService\contextDefaultImpl
     */
    public function setAgencyId($agencyId)
    {
      $this->agencyId = $agencyId;
      return $this;
    }

    /**
     * @return int
     */
    public function getAgencyIdLong()
    {
      return $this->agencyIdLong;
    }

    /**
     * @param int $agencyIdLong
     * @return \Active\UserService\contextDefaultImpl
     */
    public function setAgencyIdLong($agencyIdLong)
    {
      $this->agencyIdLong = $agencyIdLong;
      return $this;
    }

    /**
     * @return int
     */
    public function getExternalClientId()
    {
      return $this->externalClientId;
    }

    /**
     * @param int $externalClientId
     * @return \Active\UserService\contextDefaultImpl
     */
    public function setExternalClientId($externalClientId)
    {
      $this->externalClientId = $externalClientId;
      return $this;
    }

}
