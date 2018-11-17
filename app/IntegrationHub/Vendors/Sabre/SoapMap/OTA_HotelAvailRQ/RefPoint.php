<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ;

class RefPoint
{

    /**
     * @var string $DistanceDirection
     */
    protected $DistanceDirection = null;

    /**
     * @var boolean $GeoCode
     */
    protected $GeoCode = null;

    /**
     * @var string $HotelCode
     */
    protected $HotelCode = null;

    /**
     * @var anonymous27 $Index
     */
    protected $Index = null;

    /**
     * @var boolean $Sort
     */
    protected $Sort = null;

    /**
     * @param string $DistanceDirection
     * @param boolean $GeoCode
     * @param string $HotelCode
     * @param anonymous27 $Index
     * @param boolean $Sort
     */
    public function __construct($DistanceDirection = null, $GeoCode = null, $HotelCode = null, $Index = null, $Sort = null)
    {
      $this->DistanceDirection = $DistanceDirection;
      $this->GeoCode = $GeoCode;
      $this->HotelCode = $HotelCode;
      $this->Index = $Index;
      $this->Sort = $Sort;
    }

    /**
     * @return string
     */
    public function getDistanceDirection()
    {
      return $this->DistanceDirection;
    }

    /**
     * @param string $DistanceDirection
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\RefPoint
     */
    public function setDistanceDirection($DistanceDirection)
    {
      $this->DistanceDirection = $DistanceDirection;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGeoCode()
    {
      return $this->GeoCode;
    }

    /**
     * @param boolean $GeoCode
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\RefPoint
     */
    public function setGeoCode($GeoCode)
    {
      $this->GeoCode = $GeoCode;
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
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\RefPoint
     */
    public function setHotelCode($HotelCode)
    {
      $this->HotelCode = $HotelCode;
      return $this;
    }

    /**
     * @return anonymous27
     */
    public function getIndex()
    {
      return $this->Index;
    }

    /**
     * @param anonymous27 $Index
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\RefPoint
     */
    public function setIndex($Index)
    {
      $this->Index = $Index;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSort()
    {
      return $this->Sort;
    }

    /**
     * @param boolean $Sort
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\RefPoint
     */
    public function setSort($Sort)
    {
      $this->Sort = $Sort;
      return $this;
    }

}
