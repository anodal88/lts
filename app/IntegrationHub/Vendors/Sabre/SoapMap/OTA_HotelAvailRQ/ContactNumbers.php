<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ;

class ContactNumbers
{

    /**
     * @var ContactNumber $ContactNumber
     */
    protected $ContactNumber = null;

    /**
     * @param ContactNumber $ContactNumber
     */
    public function __construct($ContactNumber = null)
    {
      $this->ContactNumber = $ContactNumber;
    }

    /**
     * @return ContactNumber
     */
    public function getContactNumber()
    {
      return $this->ContactNumber;
    }

    /**
     * @param ContactNumber $ContactNumber
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\ContactNumbers
     */
    public function setContactNumber($ContactNumber)
    {
      $this->ContactNumber = $ContactNumber;
      return $this;
    }

}
