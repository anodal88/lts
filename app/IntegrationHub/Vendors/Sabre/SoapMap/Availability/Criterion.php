<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class Criterion
{

    /**
     * @var Address $Address
     */
    protected $Address = null;

    /**
     * @var Award $Award
     */
    protected $Award = null;

    /**
     * @var ContactNumbers $ContactNumbers
     */
    protected $ContactNumbers = null;

    /**
     * @var string $CommissionProgram
     */
    protected $CommissionProgram = null;

    /**
     * @var string $HotelAmenity
     */
    protected $HotelAmenity = null;

    /**
     * @var HotelFeature $HotelFeature
     */
    protected $HotelFeature = null;

    /**
     * @var HotelRef $HotelRef
     */
    protected $HotelRef = null;

    /**
     * @var string $Package
     */
    protected $Package = null;

    /**
     * @var PointOfInterest $PointOfInterest
     */
    protected $PointOfInterest = null;

    /**
     * @var string $PropertyType
     */
    protected $PropertyType = null;

    /**
     * @var RefPoint $RefPoint
     */
    protected $RefPoint = null;

    /**
     * @var string $RoomAmenity
     */
    protected $RoomAmenity = null;

    /**
     * @param Address $Address
     * @param Award $Award
     * @param ContactNumbers $ContactNumbers
     * @param string $CommissionProgram
     * @param string $HotelAmenity
     * @param HotelFeature $HotelFeature
     * @param HotelRef $HotelRef
     * @param string $Package
     * @param PointOfInterest $PointOfInterest
     * @param string $PropertyType
     * @param RefPoint $RefPoint
     * @param string $RoomAmenity
     */
    public function __construct($Address = null, $Award = null, $ContactNumbers = null, $CommissionProgram = null, $HotelAmenity = null, $HotelFeature = null, $HotelRef = null, $Package = null, $PointOfInterest = null, $PropertyType = null, $RefPoint = null, $RoomAmenity = null)
    {
      $this->Address = $Address;
      $this->Award = $Award;
      $this->ContactNumbers = $ContactNumbers;
      $this->CommissionProgram = $CommissionProgram;
      $this->HotelAmenity = $HotelAmenity;
      $this->HotelFeature = $HotelFeature;
      $this->HotelRef = $HotelRef;
      $this->Package = $Package;
      $this->PointOfInterest = $PointOfInterest;
      $this->PropertyType = $PropertyType;
      $this->RefPoint = $RefPoint;
      $this->RoomAmenity = $RoomAmenity;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param Address $Address
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\Criterion
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return Award
     */
    public function getAward()
    {
      return $this->Award;
    }

    /**
     * @param Award $Award
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\Criterion
     */
    public function setAward($Award)
    {
      $this->Award = $Award;
      return $this;
    }

    /**
     * @return ContactNumbers
     */
    public function getContactNumbers()
    {
      return $this->ContactNumbers;
    }

    /**
     * @param ContactNumbers $ContactNumbers
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\Criterion
     */
    public function setContactNumbers($ContactNumbers)
    {
      $this->ContactNumbers = $ContactNumbers;
      return $this;
    }

    /**
     * @return string
     */
    public function getCommissionProgram()
    {
      return $this->CommissionProgram;
    }

    /**
     * @param string $CommissionProgram
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\Criterion
     */
    public function setCommissionProgram($CommissionProgram)
    {
      $this->CommissionProgram = $CommissionProgram;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelAmenity()
    {
      return $this->HotelAmenity;
    }

    /**
     * @param string $HotelAmenity
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\Criterion
     */
    public function setHotelAmenity($HotelAmenity)
    {
      $this->HotelAmenity = $HotelAmenity;
      return $this;
    }

    /**
     * @return HotelFeature
     */
    public function getHotelFeature()
    {
      return $this->HotelFeature;
    }

    /**
     * @param HotelFeature $HotelFeature
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\Criterion
     */
    public function setHotelFeature($HotelFeature)
    {
      $this->HotelFeature = $HotelFeature;
      return $this;
    }

    /**
     * @return HotelRef
     */
    public function getHotelRef()
    {
      return $this->HotelRef;
    }

    /**
     * @param HotelRef $HotelRef
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\Criterion
     */
    public function setHotelRef($HotelRef)
    {
      $this->HotelRef = $HotelRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackage()
    {
      return $this->Package;
    }

    /**
     * @param string $Package
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\Criterion
     */
    public function setPackage($Package)
    {
      $this->Package = $Package;
      return $this;
    }

    /**
     * @return PointOfInterest
     */
    public function getPointOfInterest()
    {
      return $this->PointOfInterest;
    }

    /**
     * @param PointOfInterest $PointOfInterest
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\Criterion
     */
    public function setPointOfInterest($PointOfInterest)
    {
      $this->PointOfInterest = $PointOfInterest;
      return $this;
    }

    /**
     * @return string
     */
    public function getPropertyType()
    {
      return $this->PropertyType;
    }

    /**
     * @param string $PropertyType
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\Criterion
     */
    public function setPropertyType($PropertyType)
    {
      $this->PropertyType = $PropertyType;
      return $this;
    }

    /**
     * @return RefPoint
     */
    public function getRefPoint()
    {
      return $this->RefPoint;
    }

    /**
     * @param RefPoint $RefPoint
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\Criterion
     */
    public function setRefPoint($RefPoint)
    {
      $this->RefPoint = $RefPoint;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoomAmenity()
    {
      return $this->RoomAmenity;
    }

    /**
     * @param string $RoomAmenity
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\Criterion
     */
    public function setRoomAmenity($RoomAmenity)
    {
      $this->RoomAmenity = $RoomAmenity;
      return $this;
    }

}
