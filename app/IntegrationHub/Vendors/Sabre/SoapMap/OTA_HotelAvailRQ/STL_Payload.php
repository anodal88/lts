<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ;

class STL_Payload
{

    /**
     * @var ApplicationResults $ApplicationResults
     */
    protected $ApplicationResults = null;

    /**
     * @var anonymous61 $version
     */
    protected $version = null;

    /**
     * @param ApplicationResults $ApplicationResults
     * @param anonymous61 $version
     */
    public function __construct($ApplicationResults = null, $version = null)
    {
      $this->ApplicationResults = $ApplicationResults;
      $this->version = $version;
    }

    /**
     * @return ApplicationResults
     */
    public function getApplicationResults()
    {
      return $this->ApplicationResults;
    }

    /**
     * @param ApplicationResults $ApplicationResults
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\STL_Payload
     */
    public function setApplicationResults($ApplicationResults)
    {
      $this->ApplicationResults = $ApplicationResults;
      return $this;
    }

    /**
     * @return anonymous61
     */
    public function getVersion()
    {
      return $this->version;
    }

    /**
     * @param anonymous61 $version
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\STL_Payload
     */
    public function setVersion($version)
    {
      $this->version = $version;
      return $this;
    }

}
