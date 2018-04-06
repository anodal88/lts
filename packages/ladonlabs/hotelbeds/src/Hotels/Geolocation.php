<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/23/18
 * Time: 9:49 PM
 */

namespace ladonlabs\hotelbeds\Hotels;

/**
 * Class Geolocation
 * @package ladonlabs\hotelbeds\Hotels
 */
class Geolocation
{
    const MILES = "mi";
    const KILOMETERS = "km";

    /**
     * Longitude data for geolocation (mandatory if the geolocation element is used)
     * @var float
     */
    private $longitude;

    /**
     * Latitude data for geoloation (mandatory if the geolocation element is used)
     * @var float
     */
    private $latitude;

    /**
     * Radius of the area circle (mandatory if the geolocation element is used) 200 is the allowed limit.
     * @var float
     */
    private $radius;

    /**
     * mi Miles
     * km Kilometers
     *
     * @var string
     */
    private $unit;


    /**
     * GPS latitude of the bottom right point of the area rectangle
     * @var float
     */
    private $secondaryLongitude;

    /**
     * GPS latitude of the bottom right point of the area rectangle
     * @var float
     */
    private $secondaryLatitude;

    /**
     * Geolocation constructor.
     * @param float $longitude
     * @param float $latitude
     * @param float $radius
     * @param string $unit
     * @param float $secondaryLongitude
     * @param float $secondaryLatitude
     */
    public function __construct($longitude, $latitude, $radius, $unit, $secondaryLongitude = null, $secondaryLatitude = null)
    {
        $this->longitude = $longitude;
        $this->latitude = $latitude;
        $this->radius = $radius;
        $this->unit = $unit;
        $this->secondaryLongitude = $secondaryLongitude;
        $this->secondaryLatitude = $secondaryLatitude;
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     * @return Geolocation
     */
    public function setLongitude($longitude): Geolocation
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     * @return Geolocation
     */
    public function setLatitude($latitude): Geolocation
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

    /**
     * @param float $radius
     * @return Geolocation
     */
    public function setRadius($radius): Geolocation
    {
        $this->radius = $radius;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnit(): string
    {
        return $this->unit;
    }

    /**
     * @param string $unit
     * @return Geolocation
     */
    public function setUnit($unit): Geolocation
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * @return float
     */
    public function getSecondaryLongitude(): float
    {
        return $this->secondaryLongitude;
    }

    /**
     * @param float $secondaryLongitude
     * @return Geolocation
     */
    public function setSecondaryLongitude($secondaryLongitude): Geolocation
    {
        $this->secondaryLongitude = $secondaryLongitude;
        return $this;
    }

    /**
     * @return float
     */
    public function getSecondaryLatitude(): float
    {
        return $this->secondaryLatitude;
    }

    /**
     * @param float $secondaryLatitude
     * @return Geolocation
     */
    public function setSecondaryLatitude($secondaryLatitude): Geolocation
    {
        $this->secondaryLatitude = $secondaryLatitude;
        return $this;
    }


}