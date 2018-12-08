<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 11/30/18
 * Time: 11:37 PM
 */

namespace App\IntegrationHub\Traits;


use App\Http\Outputs\Common\Hotel\AvailabilityResponse;
use App\Http\Outputs\Common\Hotel\AvailableProperty;
use App\IntegrationHub\Contracts\IPropertyProvider;


/**
 * Trait SabrePropertyTrait
 * @package App\IntegrationHub\Traits
 */
trait SabrePropertyTrait
{
    /**
     * @param mixed $response
     * @return bool
     */
    public function isResponseSuccess($response):bool
    {
        return data_get($response, 'ApplicationResults.Success', false) ? true : false;
    }


    /**
     * Return the list of amenities defined for SABRE properties
     * @return array
     */
    public function getSabreAmenityDefinitions()
    {
        return [
            'ADA_Accessible',
            'AdultsOnly',
            'BeachFront',
            'Breakfast',
            'BusinessCenter',
            'BusinessReady',
            'Conventions',
            'Dataport',
            'Dining',
            'DryClean',
            'EcoCertified',
            'ExecutiveFloors',
            'FitnessCenter',
            'FreeLocalCalls',
            'FreeParking',
            'FreeShuttle',
            'FreeWifiInMeetingRooms',
            'FreeWifiInPublicSpaces',
            'FreeWifiInRooms',
            'FullServiceSpa',
            'GameFacilities',
            'HighSpeedInternet',
            'HypoallergenicRooms',
            'IndoorPool',
            'InRoomCoffeeTea',
            'InRoomMiniBar',
            'InRoomRefrigerator',
            'InRoomSafe',
            'InteriorDoorways',
            'Jacuzzi',
            'KidsFacilities',
            'KitchenFacilities',
            'MealService',
            'MeetingFacilities',
            'NoAdultTV',
            'NonSmoking',
            'OutdoorPool',
            'Pets',
            'Pool',
            'PublicTransportationAdjacent',
            'RateAssured',
            'Recreation',
            'RestrictedRoomAccess',
            'RoomService',
            'RoomService24Hours',
            'RoomsWithBalcony',
            'SkiInOutProperty',
            'SmokeFree',
            'SmokingRoomsAvail',
            'Tennis',
            'WaterPurificationSystem',
            'Wheelchair',
        ];
    }

    public function extractErrors($response){}

    public function extractWarnings($response){}




}