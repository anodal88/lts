<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class ADA_Accessible
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
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\ADA_Accessible
     */
    public function setInd($Ind)
    {
      $this->Ind = $Ind;
      return $this;
    }

}
