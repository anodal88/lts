<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class HotelRef
{

    /**
     * @var string $ChainCode
     */
    protected $ChainCode = null;

    /**
     * @var anonymous24 $UnitOfMeasure
     */
    protected $UnitOfMeasure = null;

    /**
     * @var string $HotelCityCode
     */
    protected $HotelCityCode = null;

    /**
     * @var string $HotelCode
     */
    protected $HotelCode = null;

    /**
     * @var string $HotelName
     */
    protected $HotelName = null;

    /**
     * @var string $Latitude
     */
    protected $Latitude = null;

    /**
     * @var string $Longitude
     */
    protected $Longitude = null;

    /**
     * @param string $ChainCode
     * @param anonymous24 $UnitOfMeasure
     * @param string $HotelCityCode
     * @param string $HotelCode
     * @param string $HotelName
     * @param string $Latitude
     * @param string $Longitude
     */
    public function __construct($ChainCode = null, $UnitOfMeasure = null, $HotelCityCode = null, $HotelCode = null, $HotelName = null, $Latitude = null, $Longitude = null)
    {
      $this->ChainCode = $ChainCode;
      $this->UnitOfMeasure = $UnitOfMeasure;
      $this->HotelCityCode = $HotelCityCode;
      $this->HotelCode = $HotelCode;
      $this->HotelName = $HotelName;
      $this->Latitude = $Latitude;
      $this->Longitude = $Longitude;
    }

    /**
     * @return string
     */
    public function getChainCode()
    {
      return $this->ChainCode;
    }

    /**
     * @param string $ChainCode
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\HotelRef
     */
    public function setChainCode($ChainCode)
    {
      $this->ChainCode = $ChainCode;
      return $this;
    }

    /**
     * @return anonymous24
     */
    public function getUnitOfMeasure()
    {
      return $this->UnitOfMeasure;
    }

    /**
     * @param anonymous24 $UnitOfMeasure
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\HotelRef
     */
    public function setUnitOfMeasure($UnitOfMeasure)
    {
      $this->UnitOfMeasure = $UnitOfMeasure;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelCityCode()
    {
      return $this->HotelCityCode;
    }

    /**
     * @param string $HotelCityCode
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\HotelRef
     */
    public function setHotelCityCode($HotelCityCode)
    {
      $this->HotelCityCode = $HotelCityCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelCode()
    {
      return $this->HotelCode;
    }

    /**
     * @param string $HotelCode
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\HotelRef
     */
    public function setHotelCode($HotelCode)
    {
      $this->HotelCode = $HotelCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelName()
    {
      return $this->HotelName;
    }

    /**
     * @param string $HotelName
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\HotelRef
     */
    public function setHotelName($HotelName)
    {
      $this->HotelName = $HotelName;
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
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\HotelRef
     */
    public function setLatitude($Latitude)
    {
      $this->Latitude = $Latitude;
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
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\HotelRef
     */
    public function setLongitude($Longitude)
    {
      $this->Longitude = $Longitude;
      return $this;
    }

}
