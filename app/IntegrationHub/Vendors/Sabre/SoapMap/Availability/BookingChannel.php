<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class BookingChannel
{

    /**
     * @var CompanyName $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @param CompanyName $CompanyName
     */
    public function __construct($CompanyName = null)
    {
      $this->CompanyName = $CompanyName;
    }

    /**
     * @return CompanyName
     */
    public function getCompanyName()
    {
      return $this->CompanyName;
    }

    /**
     * @param CompanyName $CompanyName
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\BookingChannel
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
      return $this;
    }

}
