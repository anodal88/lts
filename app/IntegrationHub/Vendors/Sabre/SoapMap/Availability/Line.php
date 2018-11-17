<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class Line
{

    /**
     * @var string $CountryStateCode
     */
    protected $CountryStateCode = null;

    /**
     * @var string $Latitude
     */
    protected $Latitude = null;

    /**
     * @var string $LocationName
     */
    protected $LocationName = null;

    /**
     * @var string $Longitude
     */
    protected $Longitude = null;

    /**
     * @var string $RPH
     */
    protected $RPH = null;

    /**
     * @param string $CountryStateCode
     * @param string $Latitude
     * @param string $LocationName
     * @param string $Longitude
     * @param string $RPH
     */
    public function __construct($CountryStateCode = null, $Latitude = null, $LocationName = null, $Longitude = null, $RPH = null)
    {
      $this->CountryStateCode = $CountryStateCode;
      $this->Latitude = $Latitude;
      $this->LocationName = $LocationName;
      $this->Longitude = $Longitude;
      $this->RPH = $RPH;
    }

    /**
     * @return string
     */
    public function getCountryStateCode()
    {
      return $this->CountryStateCode;
    }

    /**
     * @param string $CountryStateCode
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\Line
     */
    public function setCountryStateCode($CountryStateCode)
    {
      $this->CountryStateCode = $CountryStateCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
      return $this->Latitude;
    }

    /**
     * @param string $Latitude
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\Line
     */
    public function setLatitude($Latitude)
    {
      $this->Latitude = $Latitude;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocationName()
    {
      return $this->LocationName;
    }

    /**
     * @param string $LocationName
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\Line
     */
    public function setLocationName($LocationName)
    {
      $this->LocationName = $LocationName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
      return $this->Longitude;
    }

    /**
     * @param string $Longitude
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\Line
     */
    public function setLongitude($Longitude)
    {
      $this->Longitude = $Longitude;
      return $this;
    }

    /**
     * @return string
     */
    public function getRPH()
    {
      return $this->RPH;
    }

    /**
     * @param string $RPH
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\Line
     */
    public function setRPH($RPH)
    {
      $this->RPH = $RPH;
      return $this;
    }

}
