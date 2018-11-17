<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ;

class AvailabilityOption
{

    /**
     * @var BasicPropertyInfo $BasicPropertyInfo
     */
    protected $BasicPropertyInfo = null;

    /**
     * @var string $RPH
     */
    protected $RPH = null;

    /**
     * @param BasicPropertyInfo $BasicPropertyInfo
     * @param string $RPH
     */
    public function __construct($BasicPropertyInfo = null, $RPH = null)
    {
      $this->BasicPropertyInfo = $BasicPropertyInfo;
      $this->RPH = $RPH;
    }

    /**
     * @return BasicPropertyInfo
     */
    public function getBasicPropertyInfo()
    {
      return $this->BasicPropertyInfo;
    }

    /**
     * @param BasicPropertyInfo $BasicPropertyInfo
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\AvailabilityOption
     */
    public function setBasicPropertyInfo($BasicPropertyInfo)
    {
      $this->BasicPropertyInfo = $BasicPropertyInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getRPH()
    {
      return $this->RPH;
    }

    /**
     * @param string $RPH
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\AvailabilityOption
     */
    public function setRPH($RPH)
    {
      $this->RPH = $RPH;
      return $this;
    }

}
