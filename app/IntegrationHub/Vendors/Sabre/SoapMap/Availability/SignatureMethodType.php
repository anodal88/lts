<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class SignatureMethodType
{

    /**
     * @var HMACOutputLengthType $HMACOutputLength
     */
    protected $HMACOutputLength = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var anyURI $Algorithm
     */
    protected $Algorithm = null;

    /**
     * @param string $any
     * @param anyURI $Algorithm
     */
    public function __construct($any = null, $Algorithm = null)
    {
      $this->any = $any;
      $this->Algorithm = $Algorithm;
    }

    /**
     * @return HMACOutputLengthType
     */
    public function getHMACOutputLength()
    {
      return $this->HMACOutputLength;
    }

    /**
     * @param HMACOutputLengthType $HMACOutputLength
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\SignatureMethodType
     */
    public function setHMACOutputLength($HMACOutputLength)
    {
      $this->HMACOutputLength = $HMACOutputLength;
      return $this;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\SignatureMethodType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getAlgorithm()
    {
      return $this->Algorithm;
    }

    /**
     * @param anyURI $Algorithm
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\SignatureMethodType
     */
    public function setAlgorithm($Algorithm)
    {
      $this->Algorithm = $Algorithm;
      return $this;
    }

}
