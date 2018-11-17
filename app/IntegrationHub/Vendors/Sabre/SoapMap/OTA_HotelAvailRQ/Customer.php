<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ;

class Customer
{

    /**
     * @var Corporate $Corporate
     */
    protected $Corporate = null;

    /**
     * @var ID $ID
     */
    protected $ID = null;

    /**
     * @param Corporate $Corporate
     * @param ID $ID
     */
    public function __construct($Corporate = null, $ID = null)
    {
      $this->Corporate = $Corporate;
      $this->ID = $ID;
    }

    /**
     * @return Corporate
     */
    public function getCorporate()
    {
      return $this->Corporate;
    }

    /**
     * @param Corporate $Corporate
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Customer
     */
    public function setCorporate($Corporate)
    {
      $this->Corporate = $Corporate;
      return $this;
    }

    /**
     * @return ID
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param ID $ID
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Customer
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

}
