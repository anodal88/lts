<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class CancelPolicy
{

    /**
     * @var string $Option
     */
    protected $Option = null;

    /**
     * @var string $Numeric
     */
    protected $Numeric = null;

    /**
     * @param string $Option
     * @param string $Numeric
     */
    public function __construct($Option = null, $Numeric = null)
    {
      $this->Option = $Option;
      $this->Numeric = $Numeric;
    }

    /**
     * @return string
     */
    public function getOption()
    {
      return $this->Option;
    }

    /**
     * @param string $Option
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\CancelPolicy
     */
    public function setOption($Option)
    {
      $this->Option = $Option;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumeric()
    {
      return $this->Numeric;
    }

    /**
     * @param string $Numeric
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\CancelPolicy
     */
    public function setNumeric($Numeric)
    {
      $this->Numeric = $Numeric;
      return $this;
    }

}
