<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class AvailRequestSegment
{

    /**
     * @var AdditionalAvail $AdditionalAvail
     */
    protected $AdditionalAvail = null;

    /**
     * @var Customer $Customer
     */
    protected $Customer = null;

    /**
     * @var GuestCounts $GuestCounts
     */
    protected $GuestCounts = null;

    /**
     * @var HotelSearchCriteria $HotelSearchCriteria
     */
    protected $HotelSearchCriteria = null;

    /**
     * @var POS $POS
     */
    protected $POS = null;

    /**
     * @var RatePlanCandidates $RatePlanCandidates
     */
    protected $RatePlanCandidates = null;

    /**
     * @var TimeSpan $TimeSpan
     */
    protected $TimeSpan = null;

    /**
     * @param AdditionalAvail $AdditionalAvail
     * @param Customer $Customer
     * @param GuestCounts $GuestCounts
     * @param HotelSearchCriteria $HotelSearchCriteria
     * @param POS $POS
     * @param RatePlanCandidates $RatePlanCandidates
     * @param TimeSpan $TimeSpan
     */
    public function __construct($AdditionalAvail = null, $Customer = null, $GuestCounts = null, $HotelSearchCriteria = null, $POS = null, $RatePlanCandidates = null, $TimeSpan = null)
    {
      $this->AdditionalAvail = $AdditionalAvail;
      $this->Customer = $Customer;
      $this->GuestCounts = $GuestCounts;
      $this->HotelSearchCriteria = $HotelSearchCriteria;
      $this->POS = $POS;
      $this->RatePlanCandidates = $RatePlanCandidates;
      $this->TimeSpan = $TimeSpan;
    }

    /**
     * @return AdditionalAvail
     */
    public function getAdditionalAvail()
    {
      return $this->AdditionalAvail;
    }

    /**
     * @param AdditionalAvail $AdditionalAvail
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\AvailRequestSegment
     */
    public function setAdditionalAvail($AdditionalAvail)
    {
      $this->AdditionalAvail = $AdditionalAvail;
      return $this;
    }

    /**
     * @return Customer
     */
    public function getCustomer()
    {
      return $this->Customer;
    }

    /**
     * @param Customer $Customer
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\AvailRequestSegment
     */
    public function setCustomer($Customer)
    {
      $this->Customer = $Customer;
      return $this;
    }

    /**
     * @return GuestCounts
     */
    public function getGuestCounts()
    {
      return $this->GuestCounts;
    }

    /**
     * @param GuestCounts $GuestCounts
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\AvailRequestSegment
     */
    public function setGuestCounts($GuestCounts)
    {
      $this->GuestCounts = $GuestCounts;
      return $this;
    }

    /**
     * @return HotelSearchCriteria
     */
    public function getHotelSearchCriteria()
    {
      return $this->HotelSearchCriteria;
    }

    /**
     * @param HotelSearchCriteria $HotelSearchCriteria
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\AvailRequestSegment
     */
    public function setHotelSearchCriteria($HotelSearchCriteria)
    {
      $this->HotelSearchCriteria = $HotelSearchCriteria;
      return $this;
    }

    /**
     * @return POS
     */
    public function getPOS()
    {
      return $this->POS;
    }

    /**
     * @param POS $POS
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\AvailRequestSegment
     */
    public function setPOS($POS)
    {
      $this->POS = $POS;
      return $this;
    }

    /**
     * @return RatePlanCandidates
     */
    public function getRatePlanCandidates()
    {
      return $this->RatePlanCandidates;
    }

    /**
     * @param RatePlanCandidates $RatePlanCandidates
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\AvailRequestSegment
     */
    public function setRatePlanCandidates($RatePlanCandidates)
    {
      $this->RatePlanCandidates = $RatePlanCandidates;
      return $this;
    }

    /**
     * @return TimeSpan
     */
    public function getTimeSpan()
    {
      return $this->TimeSpan;
    }

    /**
     * @param TimeSpan $TimeSpan
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\AvailRequestSegment
     */
    public function setTimeSpan($TimeSpan)
    {
      $this->TimeSpan = $TimeSpan;
      return $this;
    }

}
