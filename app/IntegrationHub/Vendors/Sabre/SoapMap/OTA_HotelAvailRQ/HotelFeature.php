<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ;

class HotelFeature
{

    /**
     * @var boolean $FireSafetyApproved
     */
    protected $FireSafetyApproved = null;

    /**
     * @var boolean $AirportTransportation
     */
    protected $AirportTransportation = null;

    /**
     * @param boolean $FireSafetyApproved
     * @param boolean $AirportTransportation
     */
    public function __construct($FireSafetyApproved = null, $AirportTransportation = null)
    {
      $this->FireSafetyApproved = $FireSafetyApproved;
      $this->AirportTransportation = $AirportTransportation;
    }

    /**
     * @return boolean
     */
    public function getFireSafetyApproved()
    {
      return $this->FireSafetyApproved;
    }

    /**
     * @param boolean $FireSafetyApproved
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\HotelFeature
     */
    public function setFireSafetyApproved($FireSafetyApproved)
    {
      $this->FireSafetyApproved = $FireSafetyApproved;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAirportTransportation()
    {
      return $this->AirportTransportation;
    }

    /**
     * @param boolean $AirportTransportation
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\HotelFeature
     */
    public function setAirportTransportation($AirportTransportation)
    {
      $this->AirportTransportation = $AirportTransportation;
      return $this;
    }

}
