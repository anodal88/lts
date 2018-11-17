<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class SpecialOffers
{

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @var boolean $Ind
     */
    protected $Ind = null;

    /**
     * @param string $Text
     * @param boolean $Ind
     */
    public function __construct($Text = null, $Ind = null)
    {
      $this->Text = $Text;
      $this->Ind = $Ind;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\SpecialOffers
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
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
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\SpecialOffers
     */
    public function setInd($Ind)
    {
      $this->Ind = $Ind;
      return $this;
    }

}
