<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ;

class POS
{

    /**
     * @var Source $Source
     */
    protected $Source = null;

    /**
     * @param Source $Source
     */
    public function __construct($Source = null)
    {
      $this->Source = $Source;
    }

    /**
     * @return Source
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param Source $Source
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\POS
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
