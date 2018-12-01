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
    public function availabilityPropertyListFromSabre(OTA_HotelAvailRS $response)
    {
        $properties = [];

        $success = $response->getApplicationResults()->getSuccess() ?? false;
        $availableOptions = $response->getAvailabilityOptions()->getAvailabilityOption() ?? [];

        if ($success) {
            /** @var AvailabilityOption $option */
            foreach ($availableOptions as $option) {
                /** @var BasicPropertyInfo $basicInfo */
                $basicInfo = $option->getBasicPropertyInfo();
                if (!$basicInfo->getRateRange()) {
                    continue;
                }
                $address = implode(', ', $basicInfo->getAddress()->getAddressLine());
                /** @var array $propertyArray */
                $propertyArray = $basicInfo->getProperty() ?? null;
                $starsText = $propertyArray[0] ? $propertyArray[0]->getText() : null;
                $stars = $starsText ? substr($starsText, 0, 1) : -1;
                $item = new AvailableProperty();
                $amenities = [];
                /** @var PropertyOptionInfo $amenitiesNode */
                $amenitiesNode = $basicInfo->getPropertyOptionInfo();
                if ($amenitiesNode) {
                    foreach ($this->getSabreAmenityDefinitions() as $amenityName) {
                        $methodName = "get{$amenityName}";
                        if (is_callable(array($amenitiesNode, $methodName)) && $amenitiesNode->$methodName()->getInd()) {
                            $amenities[] = $amenityName;
                        }
                    }
                }
                $item->setName($basicInfo->getHotelName())
                    ->setAddress($address)
                    ->setLatitude($basicInfo->getLatitude())
                    ->setLongitude($basicInfo->getLongitude())
                    ->setPropertyCode($basicInfo->getHotelCode())
                    ->setRating($stars)
                    ->setCurrency($basicInfo->getRateRange()->getCurrencyCode())
                    ->setPrice($basicInfo->getRateRange()->getMin())
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
}