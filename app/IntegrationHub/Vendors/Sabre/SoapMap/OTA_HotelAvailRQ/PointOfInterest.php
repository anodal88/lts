<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ;

class PointOfInterest
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var string $CountryStateCode
     */
    protected $CountryStateCode = null;

    /**
     * @var boolean $NonUS
     */
    protected $NonUS = null;

    /**
     * @var int $RPH
     */
    protected $RPH = null;

    /**
     * @param string $_
     * @param string $CountryStateCode
     * @param boolean $NonUS
     * @param int $RPH
     */
    public function __construct($_ = null, $CountryStateCode = null, $NonUS = null, $RPH = null)
    {
      $this->_ = $_;
      $this->CountryStateCode = $CountryStateCode;
      $this->NonUS = $NonUS;
      $this->RPH = $RPH;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\PointOfInterest
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
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
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\PointOfInterest
     */
    public function setCountryStateCode($CountryStateCode)
    {
      $this->CountryStateCode = $CountryStateCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNonUS()
    {
      return $this->NonUS;
    }

    /**
     * @param boolean $NonUS
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\PointOfInterest
     */
    public function setNonUS($NonUS)
    {
      $this->NonUS = $NonUS;
      return $this;
    }

    /**
     * @return int
     */
    public function getRPH()
    {
      return $this->RPH;
    }

    /**
     * @param int $RPH
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\PointOfInterest
     */
    public function setRPH($RPH)
    {
      $this->RPH = $RPH;
      return $this;
    }

}
