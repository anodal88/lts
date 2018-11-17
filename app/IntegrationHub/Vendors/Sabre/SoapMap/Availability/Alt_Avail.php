<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class Alt_Avail
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
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\Alt_Avail
     */
    public function setInd($Ind)
    {
      $this->Ind = $Ind;
      return $this;
    }

}
