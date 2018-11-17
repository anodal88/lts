<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class Header
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $any
     */
    public function __construct($any = null)
    {
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\Header
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
