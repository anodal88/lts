<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class OTA_HotelAvailService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'OTA_HotelAvailRQ' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\OTA_HotelAvailRQ',
      'AvailRequestSegment' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\AvailRequestSegment',
      'AdditionalAvail' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\AdditionalAvail',
      'Customer' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Customer',
      'Corporate' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Corporate',
      'ID' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\ID',
      'GuestCounts' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\GuestCounts',
      'HotelSearchCriteria' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\HotelSearchCriteria',
      'Criterion' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Criterion',
      'Address' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Address',
      'Award' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Award',
      'ContactNumbers' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\ContactNumbers',
      'ContactNumber' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\ContactNumber',
      'HotelFeature' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\HotelFeature',
      'HotelRef' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\HotelRef',
      'PointOfInterest' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\PointOfInterest',
      'RefPoint' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\RefPoint',
      'POS' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\POS',
      'Source' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Source',
      'BookingChannel' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\BookingChannel',
      'CompanyName' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\CompanyName',
      'RatePlanCandidates' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\RatePlanCandidates',
      'RateAccessCode' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\RateAccessCode',
      'RateRange' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\RateRange',
      'TimeSpan' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\TimeSpan',
      'SabreHeader' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\SabreHeader',
      'DiagnosticResults' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\DiagnosticResults',
      'Diagnostics' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Diagnostics',
      'Identification' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Identification',
      'Identifier.System' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\IdentifierSystem',
      'Message.Condition' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\MessageCondition',
      'ProblemBase' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\ProblemBase',
      'ProblemSummary' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\ProblemSummary',
      'ResultSummary' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\ResultSummary',
      'Security' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Security',
      'Service' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Service',
      'Traces' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Traces',
      'TraceRecord' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\TraceRecord',
      'TrackingID' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\TrackingID',
      'STL_Payload' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\STL_Payload',
      'Results' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Results',
      'ApplicationResults' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\ApplicationResults',
      'ProblemInformation' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\ProblemInformation',
      'SystemSpecificResults' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\SystemSpecificResults',
      'HostCommand' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\HostCommand',
      'OTA_HotelAvailRS' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\OTA_HotelAvailRS',
      'AvailabilityOptions' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\AvailabilityOptions',
      'AvailabilityOption' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\AvailabilityOption',
      'BasicPropertyInfo' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\BasicPropertyInfo',
      'DirectConnect' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\DirectConnect',
      'Alt_Avail' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Alt_Avail',
      'DC_AvailParticipant' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\DC_AvailParticipant',
      'DC_SellParticipant' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\DC_SellParticipant',
      'RatesExceedMax' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\RatesExceedMax',
      'UnAvail' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\UnAvail',
      'LocationDescription' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\LocationDescription',
      'Property' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Property',
      'PropertyOptionInfo' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\PropertyOptionInfo',
      'ADA_Accessible' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\ADA_Accessible',
      'AdultsOnly' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\AdultsOnly',
      'BeachFront' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\BeachFront',
      'Breakfast' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Breakfast',
      'BusinessCenter' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\BusinessCenter',
      'BusinessReady' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\BusinessReady',
      'Conventions' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Conventions',
      'Dataport' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Dataport',
      'Dining' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Dining',
      'DryClean' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\DryClean',
      'EcoCertified' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\EcoCertified',
      'ExecutiveFloors' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\ExecutiveFloors',
      'FitnessCenter' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\FitnessCenter',
      'FreeLocalCalls' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\FreeLocalCalls',
      'FreeParking' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\FreeParking',
      'FreeShuttle' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\FreeShuttle',
      'FreeWifiInMeetingRooms' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\FreeWifiInMeetingRooms',
      'FreeWifiInPublicSpaces' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\FreeWifiInPublicSpaces',
      'FreeWifiInRooms' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\FreeWifiInRooms',
      'FullServiceSpa' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\FullServiceSpa',
      'GameFacilities' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\GameFacilities',
      'Golf' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Golf',
      'HighSpeedInternet' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\HighSpeedInternet',
      'HypoallergenicRooms' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\HypoallergenicRooms',
      'IndoorPool' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\IndoorPool',
      'InRoomCoffeeTea' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\InRoomCoffeeTea',
      'InRoomMiniBar' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\InRoomMiniBar',
      'InRoomRefrigerator' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\InRoomRefrigerator',
      'InRoomSafe' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\InRoomSafe',
      'InteriorDoorways' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\InteriorDoorways',
      'Jacuzzi' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Jacuzzi',
      'KidsFacilities' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\KidsFacilities',
      'KitchenFacilities' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\KitchenFacilities',
      'MealService' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\MealService',
      'MeetingFacilities' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\MeetingFacilities',
      'NoAdultTV' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\NoAdultTV',
      'NonSmoking' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\NonSmoking',
      'OutdoorPool' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\OutdoorPool',
      'Pets' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Pets',
      'Pool' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Pool',
      'PublicTransportationAdjacent' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\PublicTransportationAdjacent',
      'RateAssured' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\RateAssured',
      'Recreation' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Recreation',
      'RestrictedRoomAccess' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\RestrictedRoomAccess',
      'RoomService' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\RoomService',
      'RoomService24Hours' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\RoomService24Hours',
      'RoomsWithBalcony' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\RoomsWithBalcony',
      'SkiInOutProperty' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\SkiInOutProperty',
      'SmokeFree' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\SmokeFree',
      'SmokingRoomsAvail' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\SmokingRoomsAvail',
      'Tennis' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Tennis',
      'WaterPurificationSystem' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\WaterPurificationSystem',
      'Wheelchair' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Wheelchair',
      'RoomRate' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\RoomRate',
      'AdditionalInfo' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\AdditionalInfo',
      'CancelPolicy' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\CancelPolicy',
      'SpecialOffers' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\SpecialOffers',
      'CityList' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\CityList',
      'Line' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Line',
      'SignatureType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\SignatureType',
      'SignatureValueType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\SignatureValueType',
      'SignedInfoType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\SignedInfoType',
      'CanonicalizationMethodType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\CanonicalizationMethodType',
      'SignatureMethodType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\SignatureMethodType',
      'ReferenceType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\ReferenceType',
      'TransformsType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\TransformsType',
      'TransformType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\TransformType',
      'DigestMethodType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\DigestMethodType',
      'KeyInfoType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\KeyInfoType',
      'KeyValueType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\KeyValueType',
      'RetrievalMethodType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\RetrievalMethodType',
      'X509DataType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\X509DataType',
      'X509IssuerSerialType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\X509IssuerSerialType',
      'PGPDataType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\PGPDataType',
      'SPKIDataType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\SPKIDataType',
      'ObjectType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\ObjectType',
      'ManifestType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\ManifestType',
      'SignaturePropertiesType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\SignaturePropertiesType',
      'SignaturePropertyType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\SignaturePropertyType',
      'DSAKeyValueType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\DSAKeyValueType',
      'RSAKeyValueType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\RSAKeyValueType',
      'Envelope' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Envelope',
      'Header' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Header',
      'Body' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Body',
      'Fault' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Fault',
      'detail' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\detail',
      'Manifest' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Manifest',
      'Reference' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Reference',
      'Schema' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Schema',
      'MessageHeader' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\MessageHeader',
      'MessageData' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\MessageData',
      'SyncReply' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\SyncReply',
      'MessageOrder' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\MessageOrder',
      'AckRequested' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\AckRequested',
      'Acknowledgment' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Acknowledgment',
      'ErrorList' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\ErrorList',
      'Error' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Error',
      'StatusResponse' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\StatusResponse',
      'StatusRequest' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\StatusRequest',
      'sequenceNumber.type' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\sequenceNumbertype',
      'PartyId' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\PartyId',
      'To' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\To',
      'From' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\From',
      'Description' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\Description',
      'UsernameToken' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\Availability\\UsernameToken',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'http://webservices.sabre.com/wsdl/tpfc/OTA_HotelAvailLLS2.3.0RQ.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param OTA_HotelAvailRQ $body
     * @return OTA_HotelAvailRS
     */
    public function OTA_HotelAvailRQ(OTA_HotelAvailRQ $body)
    {
      return $this->__soapCall('OTA_HotelAvailRQ', array($body));
    }

}
