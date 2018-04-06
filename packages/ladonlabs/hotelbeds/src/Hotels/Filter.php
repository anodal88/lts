<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/23/18
 * Time: 10:55 PM
 */

namespace ladonlabs\hotelbeds\Hotels;

/**
 * Class Filter
 * @package ladonlabs\hotelbeds\Hotels
 */
class Filter
{
    const FILTER_HOTEL_PACKAGES_YES="YES";
    const FILTER_HOTEL_PACKAGES_NO="NO";
    const FILTER_HOTEL_PACKAGES_BOTH="BOTH";

    const FILTER_PAYMENT_TYPE_AT_WEB="AT_WEB";//Merchant model
    const FILTER_PAYMENT_TYPE_AT_HOTEL="AT_HOTEL";//Pay at hotel model
    const FILTER_PAYMENT_TYPE_BOTH="BOTH";

    /**
     * It filters rates which ‘net’ value is lower than minRate
     * @var float
     */
    private $minRate;

    /**
     * It filters rates which ‘net’ value is higher than maxRate
     * @var float
     */
    private $maxRate;


    /**
     * Maximum number of rates per room
     * @var integer
     */
    private $maxRatesPerRoom;

    /**
     * Maximum number of rooms you want to receive per hotel
     * @var integer
     */
    private $maxRooms;

    /**
     * The attribute is used to include or exclude package rates
     * false by default, so packages are excluded by default
     * @var boolean
     */
    private $packaging=false;

    /**
     * It is used to include or exclude hotel packages. Those are the packages
     * created by us that include another product (like massage, a ticket, etc.) together with the hotel.
     * @var string
     */
    private $hotelPackage;

    /**
     * Minimun category to be returned
     * @var integer
     */
    private $minCategory;

    /**
     * Maximum category to be returned
     * @var integer
     */
    private $maxCategory;

    /**
     * @var string
     */
    private $paymentType;

    /**
     * Filters the results by the contract requested
     * (NOTE: when using this filter is mandatory to inform availabilityRQ/@aifUse attribute)
     * @var string
     */
    private $contract;

    /**
     * @return float
     */
    public function getMinRate(): float
    {
        return $this->minRate;
    }

    /**
     * @param float $minRate
     * @return Filter
     */
    public function setMinRate(float $minRate): Filter
    {
        $this->minRate = $minRate;
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
     * @return Filter
     */
    public function setMaxRate(float $maxRate): Filter
    {
        $this->maxRate = $maxRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxRatesPerRoom(): int
    {
        return $this->maxRatesPerRoom;
    }

    /**
     * @param int $maxRatesPerRoom
     * @return Filter
     */
    public function setMaxRatesPerRoom(int $maxRatesPerRoom): Filter
    {
        $this->maxRatesPerRoom = $maxRatesPerRoom;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxRooms(): int
    {
        return $this->maxRooms;
    }

    /**
     * @param int $maxRooms
     * @return Filter
     */
    public function setMaxRooms(int $maxRooms): Filter
    {
        $this->maxRooms = $maxRooms;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPackaging(): bool
    {
        return $this->packaging;
    }

    /**
     * @param bool $packaging
     * @return Filter
     */
    public function setPackaging(bool $packaging): Filter
    {
        $this->packaging = $packaging;
        return $this;
    }

    /**
     * @return string
     */
    public function getHotelPackage(): string
    {
        return $this->hotelPackage;
    }

    /**
     * @param string $hotelPackage
     * @return Filter
     */
    public function setHotelPackage(string $hotelPackage): Filter
    {
        $this->hotelPackage = $hotelPackage;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinCategory(): int
    {
        return $this->minCategory;
    }

    /**
     * @param int $minCategory
     * @return Filter
     */
    public function setMinCategory(int $minCategory): Filter
    {
        $this->minCategory = $minCategory;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxCategory(): int
    {
        return $this->maxCategory;
    }

    /**
     * @param int $maxCategory
     * @return Filter
     */
    public function setMaxCategory(int $maxCategory): Filter
    {
        $this->maxCategory = $maxCategory;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentType(): string
    {
        return $this->paymentType;
    }

    /**
     * @param string $paymentType
     * @return Filter
     */
    public function setPaymentType(string $paymentType): Filter
    {
        $this->paymentType = $paymentType;
        return $this;
    }

    /**
     * @return string
     */
    public function getContract(): string
    {
        return $this->contract;
    }

    /**
     * @param string $contract
     * @return Filter
     */
    public function setContract(string $contract): Filter
    {
        $this->contract = $contract;
        return $this;
    }


}