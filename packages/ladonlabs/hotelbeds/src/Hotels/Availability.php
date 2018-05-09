<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/23/18
 * Time: 10:42 PM
 */

namespace ladonlabs\hotelbeds\Hotels;


use ladonlabs\hotelbeds\Client;
use ladonlabs\hotelbeds\HandleResponseTrait;
use ladonlabs\hotelbeds\Response;
use ladonlabs\hotelbeds\SerializationTrait;
use ladonlabs\sabrehotel\Filters;

/**
 * Class Availability
 * @package ladonlabs\hotelbeds\Hotels
 */
class Availability implements \JsonSerializable
{

    use SerializationTrait;

    /**
     * Displays daily price breakdown
     * @var boolean
     *
     */
    private $dailyRate;

    /**
     * Hotelbeds Group client source market
     * @var string
     */
    private $sourceMarket;

    /**
     * Language of the response
     * @var string
     */
    private $language;

    /**
     * Tags the request for CacheAPI users (NOTE: MANDATORY for this users when filtering by contract)
     * @var boolean
     */
    private $aifUse;

    /**
     * @var Stay
     */
    private $stay;

    /**
     * @var array
     */
    private $occupancies;

    /**
     * @var Destination
     */
    private $destination;

    /**
     * @var Geolocation
     */
    private $geolocation;

    /**
     * @var Keywords
     */
    private $keywords;

    /**
     * array of hotel codes to search for
     * @var array
     */
    private $hotels;

    /**
     * @var Boards
     */
    private $boards;

    /**
     * @var Filter
     */
    private $filter;

    /**
     * @return bool
     */
    public function isDailyRate(): bool
    {
        return $this->dailyRate;
    }

    /**
     * @param bool $dailyRate
     * @return Availability
     */
    public function setDailyRate(bool $dailyRate): Availability
    {
        $this->dailyRate = $dailyRate;
        return $this;
    }

    /**
     * @return string
     */
    public function getSourceMarket(): string
    {
        return $this->sourceMarket;
    }

    /**
     * @param string $sourceMarket
     * @return Availability
     */
    public function setSourceMarket(string $sourceMarket): Availability
    {
        $this->sourceMarket = $sourceMarket;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return Availability
     */
    public function setLanguage(string $language): Availability
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAifUse(): bool
    {
        return $this->aifUse;
    }

    /**
     * @param bool $aifUse
     * @return Availability
     */
    public function setAifUse(bool $aifUse): Availability
    {
        $this->aifUse = $aifUse;
        return $this;
    }

    /**
     * @return Stay
     */
    public function getStay(): Stay
    {
        return $this->stay;
    }

    /**
     * @param Stay $stay
     * @return Availability
     */
    public function setStay(Stay $stay): Availability
    {
        $this->stay = $stay;
        return $this;
    }

    /**
     * @return array
     */
    public function getOccupancies(): array
    {
        return $this->occupancies;
    }

    /**
     * @param array $occupancies
     * @return Availability
     */
    public function setOccupancies(array $occupancies): Availability
    {
        $this->occupancies = $occupancies;
        return $this;
    }

    /**
     * @param Occupancy $occupancy
     * @return $this
     */
    public function addOccupancy(Occupancy $occupancy)
    {
        $this->occupancies[] = $occupancy;
        return $this;
    }

    /**
     * @return Destination
     */
    public function getDestination(): Destination
    {
        return $this->destination;
    }

    /**
     * @param Destination $destination
     * @return Availability
     */
    public function setDestination(Destination $destination): Availability
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * @return Geolocation
     */
    public function getGeolocation(): Geolocation
    {
        return $this->geolocation;
    }

    /**
     * @param Geolocation $geolocation
     * @return Availability
     */
    public function setGeolocation(Geolocation $geolocation): Availability
    {
        $this->geolocation = $geolocation;
        return $this;
    }

    /**
     * @return array
     */
    public function getHotels(): array
    {
        return $this->hotels;
    }

    /**
     * @param array $hotels
     * @return Availability
     */
    public function setHotels(array $hotels): Availability
    {
        $this->hotels = $hotels;
        return $this;
    }

    /**
     * @param $hotelCode
     * @return $this
     */
    public function addHotel($hotelCode)
    {
        $this->hotels[] = $hotelCode;
        return $this;
    }

    /**
     * @return Boards
     */
    public function getBoards(): Boards
    {
        return $this->boards;
    }

    /**
     * @param Boards $boards
     * @return Availability
     */
    public function setBoards(Boards $boards): Availability
    {
        $this->boards = $boards;
        return $this;
    }

    /**
     * @return Filter
     */
    public function getFilter(): Filter
    {
        return $this->filter;
    }

    /**
     * @param Filter $filter
     * @return Availability
     */
    public function setFilter(Filter $filter): Availability
    {
        $this->filter = $filter;
        return $this;
    }

    /**
     * @return Keywords
     */
    public function getKeywords(): Keywords
    {
        return $this->keywords;
    }

    /**
     * @param Keywords $keywords
     * @return Availability
     */
    public function setKeywords(Keywords $keywords): Availability
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function toJson()
    {
        $availability = clone ($this);
        $availability->setHotels(['hotel' => $availability->getHotels()]);

        return json_encode($availability);
    }


}