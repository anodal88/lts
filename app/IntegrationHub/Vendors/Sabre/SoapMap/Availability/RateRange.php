<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class RateRange
{

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var string $Max
     */
    protected $Max = null;

    /**
     * @var string $Min
     */
    protected $Min = null;

    /**
     * @param string $CurrencyCode
     * @param string $Max
     * @param string $Min
     */
    public function __construct($CurrencyCode = null, $Max = null, $Min = null)
    {
      $this->CurrencyCode = $CurrencyCode;
      $this->Max = $Max;
      $this->Min = $Min;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param string $CurrencyCode
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\RateRange
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getMax()
    {
      return $this->Max;
    }

    /**
     * @param string $Max
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\RateRange
     */
    public function setMax($Max)
    {
      $this->Max = $Max;
      return $this;
    }

    /**
     * @return string
     */
    public function getMin()
    {
      return $this->Min;
    }

    /**
     * @param string $Min
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\RateRange
     */
    public function setMin($Min)
    {
      $this->Min = $Min;
      return $this;
    }

}
