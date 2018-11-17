<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class CompanyName
{

    /**
     * @var string $Division
     */
    protected $Division = null;

    /**
     * @param string $Division
     */
    public function __construct($Division = null)
    {
      $this->Division = $Division;
    }

    /**
     * @return string
     */
    public function getDivision()
    {
      return $this->Division;
    }

    /**
     * @param string $Division
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\CompanyName
     */
    public function setDivision($Division)
    {
      $this->Division = $Division;
      return $this;
    }

}
