<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ;

class DirectConnect
{

    /**
     * @var Alt_Avail $Alt_Avail
     */
    protected $Alt_Avail = null;

    /**
     * @var DC_AvailParticipant $DC_AvailParticipant
     */
    protected $DC_AvailParticipant = null;

    /**
     * @var DC_SellParticipant $DC_SellParticipant
     */
    protected $DC_SellParticipant = null;

    /**
     * @var RatesExceedMax $RatesExceedMax
     */
    protected $RatesExceedMax = null;

    /**
     * @var UnAvail $UnAvail
     */
    protected $UnAvail = null;

    /**
     * @param Alt_Avail $Alt_Avail
     * @param DC_AvailParticipant $DC_AvailParticipant
     * @param DC_SellParticipant $DC_SellParticipant
     * @param RatesExceedMax $RatesExceedMax
     * @param UnAvail $UnAvail
     */
    public function __construct($Alt_Avail = null, $DC_AvailParticipant = null, $DC_SellParticipant = null, $RatesExceedMax = null, $UnAvail = null)
    {
      $this->Alt_Avail = $Alt_Avail;
      $this->DC_AvailParticipant = $DC_AvailParticipant;
      $this->DC_SellParticipant = $DC_SellParticipant;
      $this->RatesExceedMax = $RatesExceedMax;
      $this->UnAvail = $UnAvail;
    }

    /**
     * @return Alt_Avail
     */
    public function getAlt_Avail()
    {
      return $this->Alt_Avail;
    }

    /**
     * @param Alt_Avail $Alt_Avail
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\DirectConnect
     */
    public function setAlt_Avail($Alt_Avail)
    {
      $this->Alt_Avail = $Alt_Avail;
      return $this;
    }

    /**
     * @return DC_AvailParticipant
     */
    public function getDC_AvailParticipant()
    {
      return $this->DC_AvailParticipant;
    }

    /**
     * @param DC_AvailParticipant $DC_AvailParticipant
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\DirectConnect
     */
    public function setDC_AvailParticipant($DC_AvailParticipant)
    {
      $this->DC_AvailParticipant = $DC_AvailParticipant;
      return $this;
    }

    /**
     * @return DC_SellParticipant
     */
    public function getDC_SellParticipant()
    {
      return $this->DC_SellParticipant;
    }

    /**
     * @param DC_SellParticipant $DC_SellParticipant
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\DirectConnect
     */
    public function setDC_SellParticipant($DC_SellParticipant)
    {
      $this->DC_SellParticipant = $DC_SellParticipant;
      return $this;
    }

    /**
     * @return RatesExceedMax
     */
    public function getRatesExceedMax()
    {
      return $this->RatesExceedMax;
    }

    /**
     * @param RatesExceedMax $RatesExceedMax
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\DirectConnect
     */
    public function setRatesExceedMax($RatesExceedMax)
    {
      $this->RatesExceedMax = $RatesExceedMax;
      return $this;
    }

    /**
     * @return UnAvail
     */
    public function getUnAvail()
    {
      return $this->UnAvail;
    }

    /**
     * @param UnAvail $UnAvail
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\DirectConnect
     */
    public function setUnAvail($UnAvail)
    {
      $this->UnAvail = $UnAvail;
      return $this;
    }

}
