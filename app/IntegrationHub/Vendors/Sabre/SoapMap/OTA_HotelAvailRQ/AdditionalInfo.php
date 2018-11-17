<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ;

class AdditionalInfo
{

    /**
     * @var CancelPolicy $CancelPolicy
     */
    protected $CancelPolicy = null;

    /**
     * @param CancelPolicy $CancelPolicy
     */
    public function __construct($CancelPolicy = null)
    {
      $this->CancelPolicy = $CancelPolicy;
    }

    /**
     * @return CancelPolicy
     */
    public function getCancelPolicy()
    {
      return $this->CancelPolicy;
    }

    /**
     * @param CancelPolicy $CancelPolicy
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\AdditionalInfo
     */
    public function setCancelPolicy($CancelPolicy)
    {
      $this->CancelPolicy = $CancelPolicy;
      return $this;
    }

}
