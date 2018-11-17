<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ;

class ContactNumber
{

    /**
     * @var string $Fax
     */
    protected $Fax = null;

    /**
     * @var string $Phone
     */
    protected $Phone = null;

    /**
     * @param string $Fax
     * @param string $Phone
     */
    public function __construct($Fax = null, $Phone = null)
    {
      $this->Fax = $Fax;
      $this->Phone = $Phone;
    }

    /**
     * @return string
     */
    public function getFax()
    {
      return $this->Fax;
    }

    /**
     * @param string $Fax
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\ContactNumber
     */
    public function setFax($Fax)
    {
      $this->Fax = $Fax;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\ContactNumber
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
      return $this;
    }

}
