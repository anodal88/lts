<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ;

class Recreation
{

    /**
     * @var boolean $Ind
     */
    protected $Ind = null;

    /**
     * @param boolean $Ind
     */
    public function __construct($Ind = null)
    {
      $this->Ind = $Ind;
    }

    /**
     * @return boolean
     */
    public function getInd()
    {
      return $this->Ind;
    }

    /**
     * @param boolean $Ind
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Recreation
     */
    public function setInd($Ind)
    {
      $this->Ind = $Ind;
      return $this;
    }

}