<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class OTA_HotelAvailRS
{

    /**
     * @var ApplicationResults $ApplicationResults
     */
    protected $ApplicationResults = null;

    /**
     * @var AdditionalAvail $AdditionalAvail
     */
    protected $AdditionalAvail = null;

    /**
     * @var AvailabilityOptions $AvailabilityOptions
     */
    protected $AvailabilityOptions = null;

    /**
     * @var CityList $CityList
     */
    protected $CityList = null;

    /**
     * @var string $Version
     */
    protected $Version = null;

    /**
     * @param ApplicationResults $ApplicationResults
     * @param AdditionalAvail $AdditionalAvail
     * @param AvailabilityOptions $AvailabilityOptions
     * @param CityList $CityList
     * @param string $Version
     */
    public function __construct($ApplicationResults = null, $AdditionalAvail = null, $AvailabilityOptions = null, $CityList = null, $Version = null)
    {
      $this->ApplicationResults = $ApplicationResults;
      $this->AdditionalAvail = $AdditionalAvail;
      $this->AvailabilityOptions = $AvailabilityOptions;
      $this->CityList = $CityList;
      $this->Version = $Version;
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
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\OTA_HotelAvailRS
     */
    public function setApplicationResults($ApplicationResults)
    {
      $this->ApplicationResults = $ApplicationResults;
      return $this;
    }

    /**
     * @return AdditionalAvail
     */
    public function getAdditionalAvail()
    {
      return $this->AdditionalAvail;
    }

    /**
     * @param AdditionalAvail $AdditionalAvail
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\OTA_HotelAvailRS
     */
    public function setAdditionalAvail($AdditionalAvail)
    {
      $this->AdditionalAvail = $AdditionalAvail;
      return $this;
    }

    /**
     * @return AvailabilityOptions
     */
    public function getAvailabilityOptions()
    {
      return $this->AvailabilityOptions;
    }

    /**
     * @param AvailabilityOptions $AvailabilityOptions
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\OTA_HotelAvailRS
     */
    public function setAvailabilityOptions($AvailabilityOptions)
    {
      $this->AvailabilityOptions = $AvailabilityOptions;
      return $this;
    }

    /**
     * @return CityList
     */
    public function getCityList()
    {
      return $this->CityList;
    }

    /**
     * @param CityList $CityList
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\OTA_HotelAvailRS
     */
    public function setCityList($CityList)
    {
      $this->CityList = $CityList;
      return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param string $Version
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\OTA_HotelAvailRS
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

}
