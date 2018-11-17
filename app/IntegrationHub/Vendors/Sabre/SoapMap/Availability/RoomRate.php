<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class RoomRate
{

    /**
     * @var AdditionalInfo $AdditionalInfo
     */
    protected $AdditionalInfo = null;

    /**
     * @var string $HotelRateCode
     */
    protected $HotelRateCode = null;

    /**
     * @var string $RateTypeCode
     */
    protected $RateTypeCode = null;

    /**
     * @var string $GuaranteeSurchargeRequired
     */
    protected $GuaranteeSurchargeRequired = null;

    /**
     * @var string $RateLevelCode
     */
    protected $RateLevelCode = null;

    /**
     * @var string $XPM_GuaranteeRequired
     */
    protected $XPM_GuaranteeRequired = null;

    /**
     * @param AdditionalInfo $AdditionalInfo
     * @param string $HotelRateCode
     * @param string $RateTypeCode
     * @param string $GuaranteeSurchargeRequired
     * @param string $RateLevelCode
     * @param string $XPM_GuaranteeRequired
     */
    public function __construct($AdditionalInfo = null, $HotelRateCode = null, $RateTypeCode = null, $GuaranteeSurchargeRequired = null, $RateLevelCode = null, $XPM_GuaranteeRequired = null)
    {
      $this->AdditionalInfo = $AdditionalInfo;
      $this->HotelRateCode = $HotelRateCode;
      $this->RateTypeCode = $RateTypeCode;
      $this->GuaranteeSurchargeRequired = $GuaranteeSurchargeRequired;
      $this->RateLevelCode = $RateLevelCode;
      $this->XPM_GuaranteeRequired = $XPM_GuaranteeRequired;
    }

    /**
     * @return AdditionalInfo
     */
    public function getAdditionalInfo()
    {
      return $this->AdditionalInfo;
    }

    /**
     * @param AdditionalInfo $AdditionalInfo
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\RoomRate
     */
    public function setAdditionalInfo($AdditionalInfo)
    {
      $this->AdditionalInfo = $AdditionalInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelRateCode()
    {
      return $this->HotelRateCode;
    }

    /**
     * @param string $HotelRateCode
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\RoomRate
     */
    public function setHotelRateCode($HotelRateCode)
    {
      $this->HotelRateCode = $HotelRateCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateTypeCode()
    {
      return $this->RateTypeCode;
    }

    /**
     * @param string $RateTypeCode
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\RoomRate
     */
    public function setRateTypeCode($RateTypeCode)
    {
      $this->RateTypeCode = $RateTypeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getGuaranteeSurchargeRequired()
    {
      return $this->GuaranteeSurchargeRequired;
    }

    /**
     * @param string $GuaranteeSurchargeRequired
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\RoomRate
     */
    public function setGuaranteeSurchargeRequired($GuaranteeSurchargeRequired)
    {
      $this->GuaranteeSurchargeRequired = $GuaranteeSurchargeRequired;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateLevelCode()
    {
      return $this->RateLevelCode;
    }

    /**
     * @param string $RateLevelCode
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\RoomRate
     */
    public function setRateLevelCode($RateLevelCode)
    {
      $this->RateLevelCode = $RateLevelCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getXPM_GuaranteeRequired()
    {
      return $this->XPM_GuaranteeRequired;
    }

    /**
     * @param string $XPM_GuaranteeRequired
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\RoomRate
     */
    public function setXPM_GuaranteeRequired($XPM_GuaranteeRequired)
    {
      $this->XPM_GuaranteeRequired = $XPM_GuaranteeRequired;
      return $this;
    }

}
