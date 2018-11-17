<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ;

class HotelSearchCriteria
{

    /**
     * @var Criterion $Criterion
     */
    protected $Criterion = null;

    /**
     * @var int $NumProperties
     */
    protected $NumProperties = null;

    /**
     * @param Criterion $Criterion
     * @param int $NumProperties
     */
    public function __construct($Criterion = null, $NumProperties = null)
    {
      $this->Criterion = $Criterion;
      $this->NumProperties = $NumProperties;
    }

    /**
     * @return Criterion
     */
    public function getCriterion()
    {
      return $this->Criterion;
    }

    /**
     * @param Criterion $Criterion
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\HotelSearchCriteria
     */
    public function setCriterion($Criterion)
    {
      $this->Criterion = $Criterion;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumProperties()
    {
      return $this->NumProperties;
    }

    /**
     * @param int $NumProperties
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\HotelSearchCriteria
     */
    public function setNumProperties($NumProperties)
    {
      $this->NumProperties = $NumProperties;
      return $this;
    }

}
