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
use ladonlabs\hotelbeds\Hotels\BookingFilter;
use ladonlabs\hotelbeds\Hotels\BookingRQ;
use ladonlabs\hotelbeds\Hotels\CheckRatesRQ;
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
        return json_decode($response->getBody(), true);
    }


    public function checkRates(CheckRatesRQ $request)
    {
        $request = json_encode($request);
        $client = new \ladonlabs\hotelbeds\Client();
        $baseEndpoint = $this->getConfigValue('hotel_endpoint');
        $version = $this->getConfigValue('version');
        $path = $this->getConfigValue('hotel_check_rates_path');
        $endpoint = $this->getEndpoint($baseEndpoint, $version, $path);
        $response = $client->post($endpoint, $request, $this->getRequestHeaders($request));
        return json_decode($response->getBody(), true);
    }

    /**
     * @return mixed
     */
    public function book(BookingRQ $request)
    {

        try{

            $endpoint = $request->needsSecurity()
                ? $this->getConfigValue('hotel_secure_booking_endpoint')
                : $this->getConfigValue('hotel_booking_endpoint');
            $request = json_encode($request);dump($request);
            $client = new \ladonlabs\hotelbeds\Client();
            $response = $client->post($endpoint, $request, $this->getRequestHeaders($request));dump($response);exit;
            dump(json_decode($response->getBody(), true));exit;
            return json_decode($response->getBody(), true);
        }catch(\Exception $e){
            dump($e);exit;
        }





    }

    /**
     * @param $itineraryID
     * @return mixed
     */
    public function retrieve($bookingReference)
    {
        $client = new \ladonlabs\hotelbeds\Client();
        $version = $this->getConfigValue('version');
        $path = $this->getConfigValue('hotel_booking_path') . "/{$bookingReference}";
        $baseEndpoint = $this->getConfigValue('hotel_endpoint');
        $endpoint = $this->getEndpoint($baseEndpoint, $version, $path);
        //dd($endpoint);
        $response = $client->get($endpoint, $this->getRequestHeaders());
        return $response;
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
    public function cancel($bookingReference)
    {
        $client = new \ladonlabs\hotelbeds\Client();
        $arguments = ['cancellationFlag' => 'CANCELLATION'];
        $version = $this->getConfigValue('version');
        $path = $this->getConfigValue('hotel_booking_path') . "/{$bookingReference}";
        $baseEndpoint = $this->getConfigValue('hotel_endpoint');
        $endpoint = $this->getEndpoint($baseEndpoint, $version, $path, http_build_query($arguments));
        //dd($endpoint);
        $response = $client->get($endpoint, $this->getRequestHeaders());
        return $response;
    }

    /**
     * Return The list of all bookings that match with the criteria
     * @param BookingFilter $criteria
     * @return Response
     */
    public function getBookings(BookingFilter $criteria)
    {
        $client = new \ladonlabs\hotelbeds\Client();
        $arguments = (array)$criteria;
        $version = $this->getConfigValue('version');
        $path = $this->getConfigValue('hotel_booking_path');
        $baseEndpoint = $this->getConfigValue('hotel_endpoint');
        $endpoint = $this->getEndpoint($baseEndpoint, $version, $path, http_build_query($arguments));
        $response = $client->get($endpoint, $this->getRequestHeaders());
        return $response;
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
        $path = str_replace(["{type}"], [$type], $this->getConfigValue('hotel_types_path'));
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