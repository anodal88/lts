<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class BasicPropertyInfo
{

    /**
     * @var Address $Address
     */
    protected $Address = null;

    /**
     * @var string $AvailableNegotiatedClientID
     */
    protected $AvailableNegotiatedClientID = null;

    /**
     * @var string $AvailableContractualClientID
     */
    protected $AvailableContractualClientID = null;

    /**
     * @var ContactNumbers $ContactNumbers
     */
    protected $ContactNumbers = null;

    /**
     * @var string $ContractualRateCodeMatch
     */
    protected $ContractualRateCodeMatch = null;

    /**
     * @var DirectConnect $DirectConnect
     */
    protected $DirectConnect = null;

    /**
     * @var LocationDescription $LocationDescription
     */
    protected $LocationDescription = null;

    /**
     * @var string $NegotiatedRateCodeMatch
     */
    protected $NegotiatedRateCodeMatch = null;

    /**
     * @var Property $Property
     */
    protected $Property = null;

    /**
     * @var PropertyOptionInfo $PropertyOptionInfo
     */
    protected $PropertyOptionInfo = null;

    /**
     * @var string $PropertyTierLabel
     */
    protected $PropertyTierLabel = null;

    /**
     * @var RateRange $RateRange
     */
    protected $RateRange = null;

    /**
     * @var RoomRate $RoomRate
     */
    protected $RoomRate = null;

    /**
     * @var SpecialOffers $SpecialOffers
     */
    protected $SpecialOffers = null;

    /**
     * @var string $AreaID
     */
    protected $AreaID = null;

    /**
     * @var string $ChainCode
     */
    protected $ChainCode = null;

    /**
     * @var string $Distance
     */
    protected $Distance = null;

    /**
     * @var string $GEO_ConfidenceLevel
     */
    protected $GEO_ConfidenceLevel = null;

    /**
     * @var string $HotelCode
     */
    protected $HotelCode = null;

    /**
     * @var string $HotelCityCode
     */
    protected $HotelCityCode = null;

    /**
     * @var string $HotelName
     */
    protected $HotelName = null;

    /**
     * @var string $Latitude
     */
    protected $Latitude = null;

    /**
     * @var string $Longitude
     */
    protected $Longitude = null;

    /**
     * @param Address $Address
     * @param string $AvailableNegotiatedClientID
     * @param string $AvailableContractualClientID
     * @param ContactNumbers $ContactNumbers
     * @param string $ContractualRateCodeMatch
     * @param DirectConnect $DirectConnect
     * @param LocationDescription $LocationDescription
     * @param string $NegotiatedRateCodeMatch
     * @param Property $Property
     * @param PropertyOptionInfo $PropertyOptionInfo
     * @param string $PropertyTierLabel
     * @param RateRange $RateRange
     * @param RoomRate $RoomRate
     * @param SpecialOffers $SpecialOffers
     * @param string $AreaID
     * @param string $ChainCode
     * @param string $Distance
     * @param string $GEO_ConfidenceLevel
     * @param string $HotelCode
     * @param string $HotelCityCode
     * @param string $HotelName
     * @param string $Latitude
     * @param string $Longitude
     */
    public function __construct($Address = null, $AvailableNegotiatedClientID = null, $AvailableContractualClientID = null, $ContactNumbers = null, $ContractualRateCodeMatch = null, $DirectConnect = null, $LocationDescription = null, $NegotiatedRateCodeMatch = null, $Property = null, $PropertyOptionInfo = null, $PropertyTierLabel = null, $RateRange = null, $RoomRate = null, $SpecialOffers = null, $AreaID = null, $ChainCode = null, $Distance = null, $GEO_ConfidenceLevel = null, $HotelCode = null, $HotelCityCode = null, $HotelName = null, $Latitude = null, $Longitude = null)
    {
      $this->Address = $Address;
      $this->AvailableNegotiatedClientID = $AvailableNegotiatedClientID;
      $this->AvailableContractualClientID = $AvailableContractualClientID;
      $this->ContactNumbers = $ContactNumbers;
      $this->ContractualRateCodeMatch = $ContractualRateCodeMatch;
      $this->DirectConnect = $DirectConnect;
      $this->LocationDescription = $LocationDescription;
      $this->NegotiatedRateCodeMatch = $NegotiatedRateCodeMatch;
      $this->Property = $Property;
      $this->PropertyOptionInfo = $PropertyOptionInfo;
      $this->PropertyTierLabel = $PropertyTierLabel;
      $this->RateRange = $RateRange;
      $this->RoomRate = $RoomRate;
      $this->SpecialOffers = $SpecialOffers;
      $this->AreaID = $AreaID;
      $this->ChainCode = $ChainCode;
      $this->Distance = $Distance;
      $this->GEO_ConfidenceLevel = $GEO_ConfidenceLevel;
      $this->HotelCode = $HotelCode;
      $this->HotelCityCode = $HotelCityCode;
      $this->HotelName = $HotelName;
      $this->Latitude = $Latitude;
      $this->Longitude = $Longitude;
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
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\BasicPropertyInfo
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getAvailableNegotiatedClientID()
    {
      return $this->AvailableNegotiatedClientID;
    }

    /**
     * @param string $AvailableNegotiatedClientID
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\BasicPropertyInfo
     */
    public function setAvailableNegotiatedClientID($AvailableNegotiatedClientID)
    {
      $this->AvailableNegotiatedClientID = $AvailableNegotiatedClientID;
      return $this;
    }

    /**
     * @return string
     */
    public function getAvailableContractualClientID()
    {
      return $this->AvailableContractualClientID;
    }

    /**
     * @param string $AvailableContractualClientID
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\BasicPropertyInfo
     */
    public function setAvailableContractualClientID($AvailableContractualClientID)
    {
      $this->AvailableContractualClientID = $AvailableContractualClientID;
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
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\BasicPropertyInfo
     */
    public function setContactNumbers($ContactNumbers)
    {
      $this->ContactNumbers = $ContactNumbers;
      return $this;
    }

    /**
     * @return string
     */
    public function getContractualRateCodeMatch()
    {
      return $this->ContractualRateCodeMatch;
    }

    /**
     * @param string $ContractualRateCodeMatch
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\BasicPropertyInfo
     */
    public function setContractualRateCodeMatch($ContractualRateCodeMatch)
    {
      $this->ContractualRateCodeMatch = $ContractualRateCodeMatch;
      return $this;
    }

    /**
     * @return DirectConnect
     */
    public function getDirectConnect()
    {
      return $this->DirectConnect;
    }

    /**
     * @param DirectConnect $DirectConnect
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\BasicPropertyInfo
     */
    public function setDirectConnect($DirectConnect)
    {
      $this->DirectConnect = $DirectConnect;
      return $this;
    }

    /**
     * @return LocationDescription
     */
    public function getLocationDescription()
    {
      return $this->LocationDescription;
    }

    /**
     * @param LocationDescription $LocationDescription
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\BasicPropertyInfo
     */
    public function setLocationDescription($LocationDescription)
    {
      $this->LocationDescription = $LocationDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getNegotiatedRateCodeMatch()
    {
      return $this->NegotiatedRateCodeMatch;
    }

    /**
     * @param string $NegotiatedRateCodeMatch
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\BasicPropertyInfo
     */
    public function setNegotiatedRateCodeMatch($NegotiatedRateCodeMatch)
    {
      $this->NegotiatedRateCodeMatch = $NegotiatedRateCodeMatch;
      return $this;
    }

    /**
     * @return Property
     */
    public function getProperty()
    {
      return $this->Property;
    }

    /**
     * @param Property $Property
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\BasicPropertyInfo
     */
    public function setProperty($Property)
    {
      $this->Property = $Property;
      return $this;
    }

    /**
     * @return PropertyOptionInfo
     */
    public function getPropertyOptionInfo()
    {
      return $this->PropertyOptionInfo;
    }

    /**
     * @param PropertyOptionInfo $PropertyOptionInfo
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\BasicPropertyInfo
     */
    public function setPropertyOptionInfo($PropertyOptionInfo)
    {
      $this->PropertyOptionInfo = $PropertyOptionInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getPropertyTierLabel()
    {
      return $this->PropertyTierLabel;
    }

    /**
     * @param string $PropertyTierLabel
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\BasicPropertyInfo
     */
    public function setPropertyTierLabel($PropertyTierLabel)
    {
      $this->PropertyTierLabel = $PropertyTierLabel;
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
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\BasicPropertyInfo
     */
    public function setRateRange($RateRange)
    {
      $this->RateRange = $RateRange;
      return $this;
    }

    /**
     * @return RoomRate
     */
    public function getRoomRate()
    {
      return $this->RoomRate;
    }

    /**
     * @param RoomRate $RoomRate
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\BasicPropertyInfo
     */
    public function setRoomRate($RoomRate)
    {
      $this->RoomRate = $RoomRate;
      return $this;
    }

    /**
     * @return SpecialOffers
     */
    public function getSpecialOffers()
    {
      return $this->SpecialOffers;
    }

    /**
     * @param SpecialOffers $SpecialOffers
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\BasicPropertyInfo
     */
    public function setSpecialOffers($SpecialOffers)
    {
      $this->SpecialOffers = $SpecialOffers;
      return $this;
    }

    /**
     * @return string
     */
    public function getAreaID()
    {
      return $this->AreaID;
    }

    /**
     * @param string $AreaID
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\BasicPropertyInfo
     */
    public function setAreaID($AreaID)
    {
      $this->AreaID = $AreaID;
      return $this;
    }

    /**
     * @return string
     */
    public function getChainCode()
    {
      return $this->ChainCode;
    }

    /**
     * @param string $ChainCode
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\BasicPropertyInfo
     */
    public function setChainCode($ChainCode)
    {
      $this->ChainCode = $ChainCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDistance()
    {
      return $this->Distance;
    }

    /**
     * @param string $Distance
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\BasicPropertyInfo
     */
    public function setDistance($Distance)
    {
      $this->Distance = $Distance;
      return $this;
    }

    /**
     * @return string
     */
    public function getGEO_ConfidenceLevel()
    {
      return $this->GEO_ConfidenceLevel;
    }

    /**
     * @param string $GEO_ConfidenceLevel
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\BasicPropertyInfo
     */
    public function setGEO_ConfidenceLevel($GEO_ConfidenceLevel)
    {
      $this->GEO_ConfidenceLevel = $GEO_ConfidenceLevel;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelCode()
    {
      return $this->HotelCode;
    }

    /**
     * @param string $HotelCode
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\BasicPropertyInfo
     */
    public function setHotelCode($HotelCode)
    {
      $this->HotelCode = $HotelCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelCityCode()
    {
      return $this->HotelCityCode;
    }

    /**
     * @param string $HotelCityCode
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\BasicPropertyInfo
     */
    public function setHotelCityCode($HotelCityCode)
    {
      $this->HotelCityCode = $HotelCityCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelName()
    {
      return $this->HotelName;
    }

    /**
     * @param string $HotelName
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\BasicPropertyInfo
     */
    public function setHotelName($HotelName)
    {
      $this->HotelName = $HotelName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
      return $this->Latitude;
    }

    /**
     * @param string $Latitude
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\BasicPropertyInfo
     */
    public function setLatitude($Latitude)
    {
      $this->Latitude = $Latitude;
      return $this;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
      return $this->Longitude;
    }

    /**
     * @param string $Longitude
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\BasicPropertyInfo
     */
    public function setLongitude($Longitude)
    {
      $this->Longitude = $Longitude;
      return $this;
    }

}
