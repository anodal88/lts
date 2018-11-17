<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class RateAccessCode
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @param string $_
     * @param string $Code
     */
    public function __construct($_ = null, $Code = null)
    {
      $this->_ = $_;
      $this->Code = $Code;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\RateAccessCode
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\RateAccessCode
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
