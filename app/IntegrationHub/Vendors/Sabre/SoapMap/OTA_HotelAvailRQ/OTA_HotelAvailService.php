<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ;

class OTA_HotelAvailService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'OTA_HotelAvailRQ' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\OTA_HotelAvailRQ',
      'AvailRequestSegment' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\AvailRequestSegment',
      'AdditionalAvail' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\AdditionalAvail',
      'Customer' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Customer',
      'Corporate' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Corporate',
      'ID' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\ID',
      'GuestCounts' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\GuestCounts',
      'HotelSearchCriteria' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\HotelSearchCriteria',
      'Criterion' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Criterion',
      'Address' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Address',
      'Award' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Award',
      'ContactNumbers' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\ContactNumbers',
      'ContactNumber' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\ContactNumber',
      'HotelFeature' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\HotelFeature',
      'HotelRef' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\HotelRef',
      'PointOfInterest' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\PointOfInterest',
      'RefPoint' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\RefPoint',
      'POS' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\POS',
      'Source' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Source',
      'BookingChannel' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\BookingChannel',
      'CompanyName' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\CompanyName',
      'RatePlanCandidates' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\RatePlanCandidates',
      'RateAccessCode' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\RateAccessCode',
      'RateRange' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\RateRange',
      'TimeSpan' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\TimeSpan',
      'SabreHeader' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\SabreHeader',
      'DiagnosticResults' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\DiagnosticResults',
      'Diagnostics' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Diagnostics',
      'Identification' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Identification',
      'Identifier.System' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\IdentifierSystem',
      'Message.Condition' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\MessageCondition',
      'ProblemBase' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\ProblemBase',
      'ProblemSummary' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\ProblemSummary',
      'ResultSummary' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\ResultSummary',
      'Security' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Security',
      'Service' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Service',
      'Traces' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Traces',
      'TraceRecord' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\TraceRecord',
      'TrackingID' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\TrackingID',
      'STL_Payload' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\STL_Payload',
      'Results' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Results',
      'ApplicationResults' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\ApplicationResults',
      'ProblemInformation' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\ProblemInformation',
      'SystemSpecificResults' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\SystemSpecificResults',
      'HostCommand' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\HostCommand',
      'OTA_HotelAvailRS' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\OTA_HotelAvailRS',
      'AvailabilityOptions' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\AvailabilityOptions',
      'AvailabilityOption' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\AvailabilityOption',
      'BasicPropertyInfo' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\BasicPropertyInfo',
      'DirectConnect' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\DirectConnect',
      'Alt_Avail' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Alt_Avail',
      'DC_AvailParticipant' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\DC_AvailParticipant',
      'DC_SellParticipant' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\DC_SellParticipant',
      'RatesExceedMax' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\RatesExceedMax',
      'UnAvail' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\UnAvail',
      'LocationDescription' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\LocationDescription',
      'Property' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Property',
      'PropertyOptionInfo' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\PropertyOptionInfo',
      'ADA_Accessible' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\ADA_Accessible',
      'AdultsOnly' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\AdultsOnly',
      'BeachFront' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\BeachFront',
      'Breakfast' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Breakfast',
      'BusinessCenter' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\BusinessCenter',
      'BusinessReady' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\BusinessReady',
      'Conventions' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Conventions',
      'Dataport' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Dataport',
      'Dining' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Dining',
      'DryClean' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\DryClean',
      'EcoCertified' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\EcoCertified',
      'ExecutiveFloors' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\ExecutiveFloors',
      'FitnessCenter' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\FitnessCenter',
      'FreeLocalCalls' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\FreeLocalCalls',
      'FreeParking' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\FreeParking',
      'FreeShuttle' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\FreeShuttle',
      'FreeWifiInMeetingRooms' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\FreeWifiInMeetingRooms',
      'FreeWifiInPublicSpaces' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\FreeWifiInPublicSpaces',
      'FreeWifiInRooms' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\FreeWifiInRooms',
      'FullServiceSpa' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\FullServiceSpa',
      'GameFacilities' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\GameFacilities',
      'Golf' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Golf',
      'HighSpeedInternet' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\HighSpeedInternet',
      'HypoallergenicRooms' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\HypoallergenicRooms',
      'IndoorPool' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\IndoorPool',
      'InRoomCoffeeTea' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\InRoomCoffeeTea',
      'InRoomMiniBar' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\InRoomMiniBar',
      'InRoomRefrigerator' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\InRoomRefrigerator',
      'InRoomSafe' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\InRoomSafe',
      'InteriorDoorways' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\InteriorDoorways',
      'Jacuzzi' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Jacuzzi',
      'KidsFacilities' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\KidsFacilities',
      'KitchenFacilities' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\KitchenFacilities',
      'MealService' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\MealService',
      'MeetingFacilities' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\MeetingFacilities',
      'NoAdultTV' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\NoAdultTV',
      'NonSmoking' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\NonSmoking',
      'OutdoorPool' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\OutdoorPool',
      'Pets' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Pets',
      'Pool' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Pool',
      'PublicTransportationAdjacent' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\PublicTransportationAdjacent',
      'RateAssured' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\RateAssured',
      'Recreation' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Recreation',
      'RestrictedRoomAccess' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\RestrictedRoomAccess',
      'RoomService' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\RoomService',
      'RoomService24Hours' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\RoomService24Hours',
      'RoomsWithBalcony' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\RoomsWithBalcony',
      'SkiInOutProperty' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\SkiInOutProperty',
      'SmokeFree' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\SmokeFree',
      'SmokingRoomsAvail' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\SmokingRoomsAvail',
      'Tennis' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Tennis',
      'WaterPurificationSystem' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\WaterPurificationSystem',
      'Wheelchair' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Wheelchair',
      'RoomRate' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\RoomRate',
      'AdditionalInfo' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\AdditionalInfo',
      'CancelPolicy' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\CancelPolicy',
      'SpecialOffers' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\SpecialOffers',
      'CityList' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\CityList',
      'Line' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Line',
      'SignatureType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\SignatureType',
      'SignatureValueType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\SignatureValueType',
      'SignedInfoType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\SignedInfoType',
      'CanonicalizationMethodType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\CanonicalizationMethodType',
      'SignatureMethodType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\SignatureMethodType',
      'ReferenceType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\ReferenceType',
      'TransformsType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\TransformsType',
      'TransformType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\TransformType',
      'DigestMethodType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\DigestMethodType',
      'KeyInfoType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\KeyInfoType',
      'KeyValueType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\KeyValueType',
      'RetrievalMethodType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\RetrievalMethodType',
      'X509DataType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\X509DataType',
      'X509IssuerSerialType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\X509IssuerSerialType',
      'PGPDataType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\PGPDataType',
      'SPKIDataType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\SPKIDataType',
      'ObjectType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\ObjectType',
      'ManifestType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\ManifestType',
      'SignaturePropertiesType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\SignaturePropertiesType',
      'SignaturePropertyType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\SignaturePropertyType',
      'DSAKeyValueType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\DSAKeyValueType',
      'RSAKeyValueType' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\RSAKeyValueType',
      'Envelope' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Envelope',
      'Header' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Header',
      'Body' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Body',
      'Fault' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Fault',
      'detail' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\detail',
      'Manifest' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Manifest',
      'Reference' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Reference',
      'Schema' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Schema',
      'MessageHeader' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\MessageHeader',
      'MessageData' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\MessageData',
      'SyncReply' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\SyncReply',
      'MessageOrder' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\MessageOrder',
      'AckRequested' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\AckRequested',
      'Acknowledgment' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Acknowledgment',
      'ErrorList' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\ErrorList',
      'Error' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Error',
      'StatusResponse' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\StatusResponse',
      'StatusRequest' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\StatusRequest',
      'sequenceNumber.type' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\sequenceNumbertype',
      'PartyId' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\PartyId',
      'To' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\To',
      'From' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\From',
      'Description' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\Description',
      'UsernameToken' => 'App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ\\UsernameToken',
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
