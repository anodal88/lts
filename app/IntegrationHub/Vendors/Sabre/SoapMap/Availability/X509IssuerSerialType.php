<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class X509IssuerSerialType
{

    /**
     * @var string $X509IssuerName
     */
    protected $X509IssuerName = null;

    /**
     * @var int $X509SerialNumber
     */
    protected $X509SerialNumber = null;

    /**
     * @param string $X509IssuerName
     * @param int $X509SerialNumber
     */
    public function __construct($X509IssuerName = null, $X509SerialNumber = null)
    {
      $this->X509IssuerName = $X509IssuerName;
      $this->X509SerialNumber = $X509SerialNumber;
    }

    /**
     * @return string
     */
    public function getX509IssuerName()
    {
      return $this->X509IssuerName;
    }

    /**
     * @param string $X509IssuerName
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\X509IssuerSerialType
     */
    public function setX509IssuerName($X509IssuerName)
    {
      $this->X509IssuerName = $X509IssuerName;
      return $this;
    }

    /**
     * @return int
     */
    public function getX509SerialNumber()
    {
      return $this->X509SerialNumber;
    }

    /**
     * @param int $X509SerialNumber
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\X509IssuerSerialType
     */
    public function setX509SerialNumber($X509SerialNumber)
    {
      $this->X509SerialNumber = $X509SerialNumber;
      return $this;
    }

}