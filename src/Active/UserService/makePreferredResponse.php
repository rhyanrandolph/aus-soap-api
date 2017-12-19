<?php

namespace Active\UserService;

class makePreferredResponse
{

    /**
     * @var boolean $setPreferred
     */
    protected $setPreferred = null;

    /**
     * @param boolean $setPreferred
     */
    public function __construct($setPreferred)
    {
      $this->setPreferred = $setPreferred;
    }

    /**
     * @return boolean
     */
    public function getSetPreferred()
    {
      return $this->setPreferred;
    }

    /**
     * @param boolean $setPreferred
     * @return \Active\UserService\makePreferredResponse
     */
    public function setSetPreferred($setPreferred)
    {
      $this->setPreferred = $setPreferred;
      return $this;
    }

}
