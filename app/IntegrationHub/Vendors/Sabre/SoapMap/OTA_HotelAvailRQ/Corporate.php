<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ;

class Corporate
{

    /**
     * @var string $ID
     */
    protected $ID = null;

    /**
     * @param string $ID
     */
    public function __construct($ID = null)
    {
      $this->ID = $ID;
    }

    /**
     * @return string
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param string $ID
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Corporate
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

}
