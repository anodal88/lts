<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 4/5/18
 * Time: 9:49 PM
 */

namespace ladonlabs\hotelbeds\Hotels;

/**
 * Element that contains information about flexible dates with availability and rates
 * Class ShiftRate
 * @package ladonlabs\hotelbeds\Hotels
 */

class ShiftRate
{

    /**
     * Check-in date   Format: YYYY-MM-DD
     * @var \DateTime
     */
    private $checkIn;

    /**
     * Check-out date Format: YYYY-MM-DD
     * @var \DateTime
     */
    private $checkOut;

    /**
     * Internal rate key to be used for confirmation
     * @var string
     */
    private $rateKey;

    /**
     * EnumRateClass
     * @var string
     */
    private $rateClass;

    /**
     * If its value is BOOKABLE you can book straight away.
     * If it is RECHECK you must double check first using ‘CheckRate’ method.
     * EnumRateType
     * @var string
     */
    private $rateType;

    /**
     * EnumPaymentType
     * @var string
     */
    private $paymentType;

    /**
     * @var boolean
     */
    private $packaging;

    /**
     * @var string
     */
    private $boardCode;

    /**
     * @var float
     */
    private $net;

    /**
     * Room selling price in case it is included
     * @var float
     */
    private $sellingRate;

    /**
     * Commission in case of commissionable model
     * @var float
     */
    private $commission;

    /**
     * Room gross price in hotelCurrency(for the pay at hotel model)
     * @var float
     */
    private $hotelSellingPrice;

    /**
     * 	Hotel currency (for the pay at hotel model)
     * @var string
     */
    private $hotelCurrency;

    /**
     * Identifies if the rate price is recommended
     * @var boolean
     */
    private $hotelMandatory;

    /**
     * Number of rooms requested of the type
     * @var integer
     */
    private $allotment;

    /**
     * Number of adults for the room
     * @var integer
     */
    private $adults;

    /**
     * Number of children requested
     * @var integer
     */
    private $children;

    /**
     * @return \DateTime
     */
    public function getCheckIn(): \DateTime
    {
        return $this->checkIn;
    }

    /**
     * @param \DateTime $checkIn
     * @return ShiftRate
     */
    public function setCheckIn(\DateTime $checkIn): ShiftRate
    {
        $this->checkIn = $checkIn;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCheckOut(): \DateTime
    {
        return $this->checkOut;
    }

    /**
     * @param \DateTime $checkOut
     * @return ShiftRate
     */
    public function setCheckOut(\DateTime $checkOut): ShiftRate
    {
        $this->checkOut = $checkOut;
        return $this;
    }

    /**
     * @return string
     */
    public function getRateKey(): string
    {
        return $this->rateKey;
    }

    /**
     * @param string $rateKey
     * @return ShiftRate
     */
    public function setRateKey(string $rateKey): ShiftRate
    {
        $this->rateKey = $rateKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getRateClass(): string
    {
        return $this->rateClass;
    }

    /**
     * @param string $rateClass
     * @return ShiftRate
     */
    public function setRateClass(string $rateClass): ShiftRate
    {
        $this->rateClass = $rateClass;
        return $this;
    }

    /**
     * @return string
     */
    public function getRateType(): string
    {
        return $this->rateType;
    }

    /**
     * @param string $rateType
     * @return ShiftRate
     */
    public function setRateType(string $rateType): ShiftRate
    {
        $this->rateType = $rateType;
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
     * @return ShiftRate
     */
    public function setPaymentType(string $paymentType): ShiftRate
    {
        $this->paymentType = $paymentType;
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
     * @return ShiftRate
     */
    public function setPackaging(bool $packaging): ShiftRate
    {
        $this->packaging = $packaging;
        return $this;
    }

    /**
     * @return string
     */
    public function getBoardCode(): string
    {
        return $this->boardCode;
    }

    /**
     * @param string $boardCode
     * @return ShiftRate
     */
    public function setBoardCode(string $boardCode): ShiftRate
    {
        $this->boardCode = $boardCode;
        return $this;
    }

    /**
     * @return float
     */
    public function getNet(): float
    {
        return $this->net;
    }

    /**
     * @param float $net
     * @return ShiftRate
     */
    public function setNet(float $net): ShiftRate
    {
        $this->net = $net;
        return $this;
    }

    /**
     * @return float
     */
    public function getSellingRate(): float
    {
        return $this->sellingRate;
    }

    /**
     * @param float $sellingRate
     * @return ShiftRate
     */
    public function setSellingRate(float $sellingRate): ShiftRate
    {
        $this->sellingRate = $sellingRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getCommission(): float
    {
        return $this->commission;
    }

    /**
     * @param float $commission
     * @return ShiftRate
     */
    public function setCommission(float $commission): ShiftRate
    {
        $this->commission = $commission;
        return $this;
    }

    /**
     * @return float
     */
    public function getHotelSellingPrice(): float
    {
        return $this->hotelSellingPrice;
    }

    /**
     * @param float $hotelSellingPrice
     * @return ShiftRate
     */
    public function setHotelSellingPrice(float $hotelSellingPrice): ShiftRate
    {
        $this->hotelSellingPrice = $hotelSellingPrice;
        return $this;
    }

    /**
     * @return string
     */
    public function getHotelCurrency(): string
    {
        return $this->hotelCurrency;
    }

    /**
     * @param string $hotelCurrency
     * @return ShiftRate
     */
    public function setHotelCurrency(string $hotelCurrency): ShiftRate
    {
        $this->hotelCurrency = $hotelCurrency;
        return $this;
    }

    /**
     * @return bool
     */
    public function isHotelMandatory(): bool
    {
        return $this->hotelMandatory;
    }

    /**
     * @param bool $hotelMandatory
     * @return ShiftRate
     */
    public function setHotelMandatory(bool $hotelMandatory): ShiftRate
    {
        $this->hotelMandatory = $hotelMandatory;
        return $this;
    }

    /**
     * @return int
     */
    public function getAllotment(): int
    {
        return $this->allotment;
    }

    /**
     * @param int $allotment
     * @return ShiftRate
     */
    public function setAllotment(int $allotment): ShiftRate
    {
        $this->allotment = $allotment;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdults(): int
    {
        return $this->adults;
    }

    /**
     * @param int $adults
     * @return ShiftRate
     */
    public function setAdults(int $adults): ShiftRate
    {
        $this->adults = $adults;
        return $this;
    }

    /**
     * @return int
     */
    public function getChildren(): int
    {
        return $this->children;
    }

    /**
     * @param int $children
     * @return ShiftRate
     */
    public function setChildren(int $children): ShiftRate
    {
        $this->children = $children;
        return $this;
    }


}