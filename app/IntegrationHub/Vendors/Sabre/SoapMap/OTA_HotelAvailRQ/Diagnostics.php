<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ;

class Diagnostics
{

    /**
     * @var DiagnosticLevels $Level
     */
    protected $Level = null;

    /**
     * @var TextLong $Data
     */
    protected $Data = null;

    /**
     * @var DiagnosticResults $Diagnostic
     */
    protected $Diagnostic = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DiagnosticLevels
     */
    public function getLevel()
    {
      return $this->Level;
    }

    /**
     * @param DiagnosticLevels $Level
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Diagnostics
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
      return $this;
    }

    /**
     * @return TextLong
     */
    public function getData()
    {
      return $this->Data;
    }

    /**
     * @param TextLong $Data
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Diagnostics
     */
    public function setData($Data)
    {
      $this->Data = $Data;
      return $this;
    }

    /**
     * @return DiagnosticResults
     */
    public function getDiagnostic()
    {
      return $this->Diagnostic;
    }

    /**
     * @param DiagnosticResults $Diagnostic
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Diagnostics
     */
    public function setDiagnostic($Diagnostic)
    {
      $this->Diagnostic = $Diagnostic;
      return $this;
    }

}
