<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ;

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
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Header
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}