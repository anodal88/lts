<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 11/30/18
 * Time: 11:37 PM
 */

namespace App\IntegrationHub\Traits;


use App\Http\Outputs\Common\Hotel\AvailableProperty;
use App\IntegrationHub\Contracts\IPropertyProvider;
use App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\AvailabilityOption;
use App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\BasicPropertyInfo;
use App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\OTA_HotelAvailRS;
use App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\PropertyOptionInfo;

/**
 * Trait SabrePropertyTrait
 * @package App\IntegrationHub\Traits
 */
trait SabrePropertyTrait
{

    /**
     * Return The Sabre Availability on the response converted to the common format
     * @param OTA_HotelAvailRS $response
     * @return array
     */
    public function availabilityPropertyListFromSabre($response,array $imgByCodes=[])
    {
        $properties = [];

        $success = data_get($response,'ApplicationResults.Success',false) ?true:false;
        $availableOptions = data_get($response,'AvailabilityOptions.AvailabilityOption',[]);

        if ($success) {
            foreach ($availableOptions as $option) {
                $basicInfo = data_get($option,'BasicPropertyInfo',null);
                $rateRange =$basicInfo->RateRange??null;
                if (!$rateRange) {
                    continue;
                }
                $addressLines =  $basicInfo->Address->AddressLine ?? [];
                $address = implode(', ',$addressLines);

                /** @var array $propertyArray */
                $propertyArray = $basicInfo->Property ?? null;
                $starsText = $propertyArray[0] ? $propertyArray[0]->Text : null;
                $stars = $starsText ? substr($starsText, 0, 1) : -1;
                $item = new AvailableProperty();
                $amenities = [];

                $amenitiesNode = $basicInfo->PropertyOptionInfo;
                if ($amenitiesNode) {
                    foreach ($this->getSabreAmenityDefinitions() as $amenityName) {
                        $exist = ($amenitiesNode->$amenityName)->Ind;
                        if ($exist) {
                            $amenities[] = $amenityName;
                        }
                    }
                }
                $hotelCode = (int)$basicInfo->HotelCode;
                $item->setName($basicInfo->HotelName)
                    ->setPhoto($imgByCodes[$hotelCode])
                    ->setAddress($address)
                    ->setLatitude($basicInfo->Latitude)
                    ->setLongitude($basicInfo->Longitude)
                    ->setPropertyCode($hotelCode)
                    ->setRating($stars)
                    ->setCurrency($rateRange->CurrencyCode)
                    ->setPrice($rateRange->Min)
                    ->setProviderCode(IPropertyProvider::SABRE_PROPERTY_PROVIDER)
                    ->setAmenities($amenities);
                $properties[] = $item;
            }
        }
        return $properties;
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

    /**
     * Due to SABRE don't allow to search multiple availabilities at the same time
     * we ave the total amount of guest by each room
     * @param $rooms
     * @return float
     */
    public function getGuestsCount(array $rooms)
    {
        $guestCount = 0;
        foreach ($rooms as $r) {
            $guest = explode(',', $r);
            $guestCount += $guest[0];
        }

        return round($guestCount / count($rooms), 0);
    }
}