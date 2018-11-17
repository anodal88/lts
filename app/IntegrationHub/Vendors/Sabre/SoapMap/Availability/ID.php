<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class ID
{

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @param string $Number
     */
    public function __construct($Number = null)
    {
      $this->Number = $Number;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\ID
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}
