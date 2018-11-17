<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ;

class Address
{

    /**
     * @var string $AddressLine
     */
    protected $AddressLine = null;

    /**
     * @param string $AddressLine
     */
    public function __construct($AddressLine = null)
    {
      $this->AddressLine = $AddressLine;
    }

    /**
     * @return string
     */
    public function getAddressLine()
    {
      return $this->AddressLine;
    }

    /**
     * @param string $AddressLine
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Address
     */
    public function setAddressLine($AddressLine)
    {
      $this->AddressLine = $AddressLine;
      return $this;
    }

}
