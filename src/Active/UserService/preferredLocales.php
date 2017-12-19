<?php

namespace Active\UserService;

class preferredLocales
{

    /**
     * @var string $locale
     */
    protected $locale = null;

    /**
     * @param string $locale
     */
    public function __construct($locale)
    {
      $this->locale = $locale;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
      return $this->locale;
    }

    /**
     * @param string $locale
     * @return \Active\UserService\preferredLocales
     */
    public function setLocale($locale)
    {
      $this->locale = $locale;
      return $this;
    }

}
