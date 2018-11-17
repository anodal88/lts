<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class POS
{

    /**
     * @var Source $Source
     */
    protected $Source = null;

    /**
     * @param Source $Source
     */
    public function __construct($Source = null)
    {
      $this->Source = $Source;
    }

    /**
     * @return Source
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param Source $Source
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\POS
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
