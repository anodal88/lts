<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/9/18
 * Time: 1:14 AM
 */

namespace ladonlabs\hotelbeds;


use App\Contracts\BookingInterface;
use App\Contracts\HotelProviderInterface;
use App\Contracts\StayInterface;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use ladonlabs\hotelbeds\Hotels\Availability;
use ladonlabs\hotelbeds\Hotels\HotelApiContext;


class HotelBedsProxy
{

    const TYPE_ACCOMMODATIONS = "accommodations";
    const TYPE_BOARDS = "boards";
    const TYPE_CATEGORIES = "categories";
    const TYPE_CHAINS = "chains";
    const TYPE_CURRENCIES = "currencies";
    const TYPE_FACILITIES = "facilities";
    const TYPE_FACILITY_GROUPS = "facilitygroups";
    const TYPE_ISSUES = "issues";
    const TYPE_LANGUAGES = "languages";
    const TYPE_FACILITY_TYPOLOGIES = "facilitytypologies";
    const TYPE_PROMOTIONS = "promotions";
    const TYPE_ROOMS = "rooms";
    const TYPE_SEGMENTS = "segments";
    const TYPE_TERMINALS = "terminals";
    const TYPE_IMAGE_TYPES = "imagetypes";
    const TYPE_GROUP_CATEGORIES = "groupcategories";
    const TYPE_RATE_COMMENTS = "ratecomments";
    const TYPE_RATE_COMMENT_DETAILS = "ratecommentdetails";

    /**
     * @var array
     */
    private $config;
    /**
     * @var Client
     */
    private $client;

    /**
     * This attribute allow me to perform operations for different clients
     * @var HotelApiContext
     */
    private $hotelApiContext;

    public function __construct($config)
    {
        $this->config = $config;

        $this->client = new Client();

    }

    /**
     * @param HotelApiContext $context
     * @return $this
     */
    public function setHotelContext(HotelApiContext $context)
    {
        $this->hotelApiContext = $context;
        return $this;
    }

    /**
     * @param Availability $availability
     * @return Response
     */
    public function search(Availability $availability)
    {
        $request = $availability->toJson();
        $client = new \ladonlabs\hotelbeds\Client();
        $baseEndpoint = $this->getConfigValue('hotel_endpoint');
        $version = $this->getConfigValue('version');
        $path = $this->getConfigValue('hotel_availability_path');
        $endpoint = $this->getEndpoint($baseEndpoint, $version, $path);
        $response = $client->post($endpoint, $request, $this->getRequestHeaders($request));
        //dump($response);exit;
        return $response;
    }

    /**
     * @param BookingInterface $booking
     * @return mixed
     */
    public function book(BookingInterface $booking)
    {
        // TODO: Implement book() method.
    }

    /**
     * @param $itineraryID
     * @return mixed
     */
    public function retrieve($itineraryID)
    {
        // TODO: Implement retrieve() method.
    }

    /**
     * @param $itineraryId
     * @param BookingInterface $booking
     * @return mixed
     */
    public function update($itineraryId, BookingInterface $booking)
    {
        // TODO: Implement update() method.
    }

    /**
     * @param BookingInterface $booking
     * @return mixed
     */
    public function cancel(BookingInterface $booking)
    {
        // TODO: Implement cancel() method.
    }

    /**
     * @param $property_code
     * @return mixed
     */
    public function getPropertyDetails($property_code)
    {
        // TODO: Implement getPropertyDetails() method.
    }

    /**
     * @param $property_code
     * @return mixed
     */
    public function getAvailableRooms($property_code)
    {
        // TODO: Implement getAvailableRooms() method.
    }

    /**
     * @param $property_code
     * @return mixed
     */
    public function getPaymentTypes($property_code)
    {
        // TODO: Implement getPaymentTypes() method.
    }

    /**
     * @param $offset
     * @param $limit
     * @return Response
     */
    public function getHotelsContent($offset = 1, $limit = 100)
    {
        $client = new \ladonlabs\hotelbeds\Client();
        $arguments = ['fields' => 'all', 'from' => $offset, 'to' => $limit];
        $version = $this->getConfigValue('version');
        $path = $this->getConfigValue('hotel_content_path');
        $baseEndpoint = $this->getConfigValue('hotel_content_endpoint');
        $endpoint = $this->getEndpoint($baseEndpoint, $version, $path, http_build_query($arguments));
        //dd($endpoint);
        $response = $client->get($endpoint, $this->getRequestHeaders());
        dd(json_decode($response->getBody()));
        return $response;
    }

    /**
     * @param $type
     * @param int $from
     * @param int $to
     * @return Response
     */
    public function getContentType($type, $from = 1, $to = 1000)
    {
        $client = new \ladonlabs\hotelbeds\Client();
        $arguments = ['fields' => 'all', 'from' => $from, 'to' => $to];
        $version = $this->getConfigValue('version');
        $path = str_replace(["{type}"],[$type],$this->getConfigValue('hotel_types_path'));
        $baseEndpoint = $this->getConfigValue('hotel_content_endpoint');
        $endpoint = $this->getEndpoint($baseEndpoint, $version, $path, http_build_query($arguments));
        //dd($endpoint);
        $response = $client->get($endpoint, $this->getRequestHeaders());
        dd(json_decode($response->getBody()));
        return $response;
    }

    /**
     * Get an specific value from the configuration array
     *
     * @param $path
     * @param $default
     * @return mixed
     */
    public function getConfigValue($path, $default = null)
    {
        return array_get($this->config, $path, $default);
    }

    /**
     * Return all request headers
     *
     * @return array
     */
    public function getRequestHeaders($request = null)
    {
        $headers = [
            'Api-Key:' . $this->hotelApiContext->getApiKey(),
            'X-Signature:' . $this->hotelApiContext->getSignature(),
            'Content-Type:' . 'application/json',
            'Accept:' . 'application/json',
            'Accept-Encoding:' . 'gzip'
        ];
        if ($request) {
            $headers[] = 'Content-Length:' . strlen($request);
        }
        return $headers;
    }

    /**
     * Generate the endpoint based on version and path
     * @param $version
     * @param $path
     * @return mixed
     */
    public function getEndpoint($baseEndpoint, $version, $path, $queryString = null)
    {
        $endpoint = str_replace(["{version}", "{path}"], [$version, $path], $baseEndpoint);
        if ($queryString) {
            $endpoint = "{$endpoint}?{$queryString}";
        }
        return $endpoint;
    }



}