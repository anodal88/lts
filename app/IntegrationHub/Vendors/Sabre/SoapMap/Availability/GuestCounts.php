<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class GuestCounts
{

    /**
     * @var int $Count
     */
    protected $Count = null;

    /**
     * @param int $Count
     */
    public function __construct($Count = null)
    {
      $this->Count = $Count;
    }

    /**
     * @return int
     */
    public function getCount()
    {
      return $this->Count;
    }

    /**
     * @param int $Count
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\GuestCounts
     */
    public function setCount($Count)
    {
      $this->Count = $Count;
      return $this;
    }

}
