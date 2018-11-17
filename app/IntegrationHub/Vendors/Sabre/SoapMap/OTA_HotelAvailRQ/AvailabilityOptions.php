<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ;

class AvailabilityOptions
{

    /**
     * @var AvailabilityOption $AvailabilityOption
     */
    protected $AvailabilityOption = null;

    /**
     * @param AvailabilityOption $AvailabilityOption
     */
    public function __construct($AvailabilityOption = null)
    {
      $this->AvailabilityOption = $AvailabilityOption;
    }

    /**
     * @return AvailabilityOption
     */
    public function getAvailabilityOption()
    {
      return $this->AvailabilityOption;
    }

    /**
     * @param AvailabilityOption $AvailabilityOption
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\AvailabilityOptions
     */
    public function setAvailabilityOption($AvailabilityOption)
    {
      $this->AvailabilityOption = $AvailabilityOption;
      return $this;
    }

}
