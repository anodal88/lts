<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 12/6/18
 * Time: 1:40 AM
 */

namespace App\IntegrationHub\Vendors\Sabre\Activities\Hotel;


use App\Http\Outputs\Common\Hotel\AvailableProperty;
use App\IntegrationHub\Contracts\IPropertyProvider;
use App\IntegrationHub\Contracts\IResourceProxy;
use App\IntegrationHub\Traits\SabrePropertyTrait;
use App\IntegrationHub\Vendors\Sabre\Activities\BaseActivity;
use App\IntegrationHub\Vendors\Sabre\SabrePropertyProxy;

class SearchActivity extends BaseActivity
{
    use SabrePropertyTrait;

   /** @var IResourceProxy  */
    protected $proxy;

    /** @var array  */
    protected $paramsBag;

    public function __construct($wsdl, $options = [], IResourceProxy $proxy,array $params)
    {
        $options = array_merge(array(
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS
        ), $options);
        parent::__construct($wsdl, $options,$proxy,$params);
    }

    /**
     * @inheritDoc
     */
    public function run(array $body)
    {
        return $this->__soapCall('OTA_HotelAvailRQ', array($body));
    }

    /**
     * @inheritDoc
     */
    public function getRequest(): array
    {
        $rooms = $this->paramsBag['occupancy'];
        $guestCount = $this->getGuestsCount($rooms);

        $version = $this->proxy->getOtaAvailVersion();
        $hotelCodesAndImages = $this->paramsBag['property_codes'] ?? [];

        $criterion = [];
        foreach ($hotelCodesAndImages as $hotelCode => $image) {
            $criterion['HotelRef'][] = ['HotelCode' => $hotelCode];
        }

        $request = [
            'Version' => $version,
            'AvailRequestSegment' => [
                'GuestCounts' => [
                    'Count' => $guestCount
                ],
                'HotelSearchCriteria' => [
                    'Criterion' => $criterion,
                    'NumProperties' => 100
                ],
                'TimeSpan' => [
                    'End' => '2019-01-20',
                    'Start' => '2019-01-19'
                ]
            ]
        ];
        return $request;
    }

    /**
     * Return The Sabre Availability on the response converted to the common format
     * @inheritDoc
     * @return AvailableProperty[]
     */
    public function getResponse()
    {
        $properties = [];
        $imgByCodes = $this->paramsBag['property_codes'] ?? [];
        $rawResponse = $this->run($this->getRequest());
        $success = $this->isResponseSuccess($rawResponse);
        $availableOptions = data_get($rawResponse,'AvailabilityOptions.AvailabilityOption',[]);
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