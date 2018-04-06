<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/23/18
 * Time: 11:15 PM
 */

namespace ladonlabs\hotelbeds\Hotels;


use ladonlabs\hotelbeds\Client;

/**
 * Class HotelApiContext
 * @package ladonlabs\hotelbeds\Hotels
 */
class HotelApiContext
{

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $apiSecret;

    /**
     * @var string
     */
    private $applicationName;

    /**
     * HotelApiContext constructor.
     * @param string $apiKey
     * @param string $apiSecret
     * @param string $applicationName
     */
    public function __construct( $apiKey,  $apiSecret,  $applicationName=null)
    {
        $this->apiKey = $apiKey;
        $this->apiSecret = $apiSecret;
        $this->applicationName = $applicationName;
    }


    /**
     * @return string
     */
    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     * @return HotelApiContext
     */
    public function setApiKey(string $apiKey): HotelApiContext
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getApiSecret(): string
    {
        return $this->apiSecret;
    }

    /**
     * @param string $apiSecret
     * @return HotelApiContext
     */
    public function setApiSecret(string $apiSecret): HotelApiContext
    {
        $this->apiSecret = $apiSecret;
        return $this;
    }

    /**
     * @return string
     */
    public function getApplicationName(): string
    {
        return $this->applicationName;
    }

    /**
     * @param string $applicationName
     * @return HotelApiContext
     */
    public function setApplicationName(string $applicationName): HotelApiContext
    {
        $this->applicationName = $applicationName;
        return $this;
    }

    /**
     * Build the signature that have to be send in the headers
     * @return string
     */
    public function getSignature(){
        return  hash("sha256", $this->apiKey . $this->apiSecret . time());
    }
}