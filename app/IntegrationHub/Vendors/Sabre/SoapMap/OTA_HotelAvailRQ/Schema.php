<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ;

class Schema
{

    /**
     * @var anyURI $location
     */
    protected $location = null;

    /**
     * @var nonemptystring $version
     */
    protected $version = null;

    /**
     * @param anyURI $location
     * @param nonemptystring $version
     */
    public function __construct($location = null, $version = null)
    {
      $this->location = $location;
      $this->version = $version;
    }

    /**
     * @return anyURI
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param anyURI $location
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Schema
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return nonemptystring
     */
    public function getVersion()
    {
      return $this->version;
    }

    /**
     * @param nonemptystring $version
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Schema
     */
    public function setVersion($version)
    {
      $this->version = $version;
      return $this;
    }

}
