<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ;

class CityList
{

    /**
     * @var Line $Line
     */
    protected $Line = null;

    /**
     * @param Line $Line
     */
    public function __construct($Line = null)
    {
      $this->Line = $Line;
    }

    /**
     * @return Line
     */
    public function getLine()
    {
      return $this->Line;
    }

    /**
     * @param Line $Line
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\CityList
     */
    public function setLine($Line)
    {
      $this->Line = $Line;
      return $this;
    }

}
