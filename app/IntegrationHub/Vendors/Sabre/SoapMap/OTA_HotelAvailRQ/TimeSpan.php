<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ;

class TimeSpan
{

    /**
     * @var date $End
     */
    protected $End = null;

    /**
     * @var date $Start
     */
    protected $Start = null;

    /**
     * @param date $End
     * @param date $Start
     */
    public function __construct($End = null, $Start = null)
    {
      $this->End = $End;
      $this->Start = $Start;
    }

    /**
     * @return date
     */
    public function getEnd()
    {
      return $this->End;
    }

    /**
     * @param date $End
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\TimeSpan
     */
    public function setEnd($End)
    {
      $this->End = $End;
      return $this;
    }

    /**
     * @return date
     */
    public function getStart()
    {
      return $this->Start;
    }

    /**
     * @param date $Start
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\TimeSpan
     */
    public function setStart($Start)
    {
      $this->Start = $Start;
      return $this;
    }

}
