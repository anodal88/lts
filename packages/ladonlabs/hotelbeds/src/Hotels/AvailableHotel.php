<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 4/5/18
 * Time: 9:05 PM
 */

namespace ladonlabs\hotelbeds\Hotels;


/**
 * Class AvailableHotel
 * @package ladonlabs\hotelbeds\Hotels
 */

class AvailableHotel
{
    /**
     * @var Keyword[]
     */
    private $keywords;

    /**
     * @var string
     */
    private $name;

    /**
     * Hotelbeds internal hotel code
     * @var integer
     */
    private $code;

    /**
     * @var string
     */
    private $categoryCode;

    /**
     * @var string
     */
    private $categoryName;

    /**
     * Destination code for hotel location
     * @var string
     */
    private $destinationCode;

    /**
     * @var string
     */
    private $destinationName;

    /**
     * Zone name for hotel location
     * @var string
     */
    private $zoneName;

    /**
     * Zone code for hotel location
     * @var string
     */
    private $zoneCode;

    /**
     * @var float
     */
    private $latitude;

    /**
     * @var float
     */
    private $longitude;

    /**
     * @var string
     */
    private $currency;

    /**
     * Maximum hotel room price
     * @var float
     */
    private $maxRate;

    /**
     * Minimum hotel room price
     * @var float
     */
    private $minRate;

    /**
     * @var CreditCard[]
     */
    private $creditCards;

    /**
     * @var Review[]
     */
    private $reviews;

    /**
     * List of rooms available for a particular hotel
     * @var Room[]
     */
    private $rooms;

    /**
     * @return Keyword[]
     */
    public function getKeywords(): array
    {
        return $this->keywords;
    }

    /**
     * @param Keyword[] $keywords
     * @return AvailableHotel
     */
    public function setKeywords(array $keywords): AvailableHotel
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return AvailableHotel
     */
    public function setName(string $name): AvailableHotel
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @param int $code
     * @return AvailableHotel
     */
    public function setCode(int $code): AvailableHotel
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategoryCode(): string
    {
        return $this->categoryCode;
    }

    /**
     * @param string $categoryCode
     * @return AvailableHotel
     */
    public function setCategoryCode(string $categoryCode): AvailableHotel
    {
        $this->categoryCode = $categoryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategoryName(): string
    {
        return $this->categoryName;
    }

    /**
     * @param string $categoryName
     * @return AvailableHotel
     */
    public function setCategoryName(string $categoryName): AvailableHotel
    {
        $this->categoryName = $categoryName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDestinationCode(): string
    {
        return $this->destinationCode;
    }

    /**
     * @param string $destinationCode
     * @return AvailableHotel
     */
    public function setDestinationCode(string $destinationCode): AvailableHotel
    {
        $this->destinationCode = $destinationCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getDestinationName(): string
    {
        return $this->destinationName;
    }

    /**
     * @param string $destinationName
     * @return AvailableHotel
     */
    public function setDestinationName(string $destinationName): AvailableHotel
    {
        $this->destinationName = $destinationName;
        return $this;
    }

    /**
     * @return string
     */
    public function getZoneName(): string
    {
        return $this->zoneName;
    }

    /**
     * @param string $zoneName
     * @return AvailableHotel
     */
    public function setZoneName(string $zoneName): AvailableHotel
    {
        $this->zoneName = $zoneName;
        return $this;
    }

    /**
     * @return string
     */
    public function getZoneCode(): string
    {
        return $this->zoneCode;
    }

    /**
     * @param string $zoneCode
     * @return AvailableHotel
     */
    public function setZoneCode(string $zoneCode): AvailableHotel
    {
        $this->zoneCode = $zoneCode;
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
     * @return AvailableHotel
     */
    public function setLatitude(float $latitude): AvailableHotel
    {
        $this->latitude = $latitude;
        return $this;
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
     * @return AvailableHotel
     */
    public function setLongitude(float $longitude): AvailableHotel
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return AvailableHotel
     */
    public function setCurrency(string $currency): AvailableHotel
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return float
     */
    public function getMaxRate(): float
    {
        return $this->maxRate;
    }

    /**
     * @param float $maxRate
     * @return AvailableHotel
     */
    public function setMaxRate(float $maxRate): AvailableHotel
    {
        $this->maxRate = $maxRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getMinRate(): float
    {
        return $this->minRate;
    }

    /**
     * @param float $minRate
     * @return AvailableHotel
     */
    public function setMinRate(float $minRate): AvailableHotel
    {
        $this->minRate = $minRate;
        return $this;
    }

    /**
     * @return CreditCard[]
     */
    public function getCreditCards(): array
    {
        return $this->creditCards;
    }

    /**
     * @param CreditCard[] $creditCards
     * @return AvailableHotel
     */
    public function setCreditCards(array $creditCards): AvailableHotel
    {
        $this->creditCards = $creditCards;
        return $this;
    }

    /**
     * @return Review[]
     */
    public function getReviews(): array
    {
        return $this->reviews;
    }

    /**
     * @param Review[] $reviews
     * @return AvailableHotel
     */
    public function setReviews(array $reviews): AvailableHotel
    {
        $this->reviews = $reviews;
        return $this;
    }

    /**
     * @return Room[]
     */
    public function getRooms(): array
    {
        return $this->rooms;
    }

    /**
     * @param Room[] $rooms
     * @return AvailableHotel
     */
    public function setRooms(array $rooms): AvailableHotel
    {
        $this->rooms = $rooms;
        return $this;
    }


}