<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class RatePlanCandidates
{

    /**
     * @var string $ContractNegotiatedRateCode
     */
    protected $ContractNegotiatedRateCode = null;

    /**
     * @var RateAccessCode $RateAccessCode
     */
    protected $RateAccessCode = null;

    /**
     * @var string $RatePlanCode
     */
    protected $RatePlanCode = null;

    /**
     * @var RateRange $RateRange
     */
    protected $RateRange = null;

    /**
     * @var anonymous35 $PromotionalSpot
     */
    protected $PromotionalSpot = null;

    /**
     * @var boolean $RateAssured
     */
    protected $RateAssured = null;

    /**
     * @var boolean $SuppressRackRate
     */
    protected $SuppressRackRate = null;

    /**
     * @param string $ContractNegotiatedRateCode
     * @param RateAccessCode $RateAccessCode
     * @param string $RatePlanCode
     * @param RateRange $RateRange
     * @param anonymous35 $PromotionalSpot
     * @param boolean $RateAssured
     * @param boolean $SuppressRackRate
     */
    public function __construct($ContractNegotiatedRateCode = null, $RateAccessCode = null, $RatePlanCode = null, $RateRange = null, $PromotionalSpot = null, $RateAssured = null, $SuppressRackRate = null)
    {
      $this->ContractNegotiatedRateCode = $ContractNegotiatedRateCode;
      $this->RateAccessCode = $RateAccessCode;
      $this->RatePlanCode = $RatePlanCode;
      $this->RateRange = $RateRange;
      $this->PromotionalSpot = $PromotionalSpot;
      $this->RateAssured = $RateAssured;
      $this->SuppressRackRate = $SuppressRackRate;
    }

    /**
     * @return string
     */
    public function getContractNegotiatedRateCode()
    {
      return $this->ContractNegotiatedRateCode;
    }

    /**
     * @param string $ContractNegotiatedRateCode
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\RatePlanCandidates
     */
    public function setContractNegotiatedRateCode($ContractNegotiatedRateCode)
    {
      $this->ContractNegotiatedRateCode = $ContractNegotiatedRateCode;
      return $this;
    }

    /**
     * @return RateAccessCode
     */
    public function getRateAccessCode()
    {
      return $this->RateAccessCode;
    }

    /**
     * @param RateAccessCode $RateAccessCode
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\RatePlanCandidates
     */
    public function setRateAccessCode($RateAccessCode)
    {
      $this->RateAccessCode = $RateAccessCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getRatePlanCode()
    {
      return $this->RatePlanCode;
    }

    /**
     * @param string $RatePlanCode
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\RatePlanCandidates
     */
    public function setRatePlanCode($RatePlanCode)
    {
      $this->RatePlanCode = $RatePlanCode;
      return $this;
    }

    /**
     * @return RateRange
     */
    public function getRateRange()
    {
      return $this->RateRange;
    }

    /**
     * @param RateRange $RateRange
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\RatePlanCandidates
     */
    public function setRateRange($RateRange)
    {
      $this->RateRange = $RateRange;
      return $this;
    }

    /**
     * @return anonymous35
     */
    public function getPromotionalSpot()
    {
      return $this->PromotionalSpot;
    }

    /**
     * @param anonymous35 $PromotionalSpot
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\RatePlanCandidates
     */
    public function setPromotionalSpot($PromotionalSpot)
    {
      $this->PromotionalSpot = $PromotionalSpot;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRateAssured()
    {
      return $this->RateAssured;
    }

    /**
     * @param boolean $RateAssured
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\RatePlanCandidates
     */
    public function setRateAssured($RateAssured)
    {
      $this->RateAssured = $RateAssured;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSuppressRackRate()
    {
      return $this->SuppressRackRate;
    }

    /**
     * @param boolean $SuppressRackRate
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\RatePlanCandidates
     */
    public function setSuppressRackRate($SuppressRackRate)
    {
      $this->SuppressRackRate = $SuppressRackRate;
      return $this;
    }

}
