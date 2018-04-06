<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/24/18
 * Time: 1:46 AM
 */

namespace ladonlabs\hotelbeds\Hotels;

/**
 * Class Rate
 * @package ladonlabs\hotelbeds\Hotels
 */
class Rate
{
    /**
     * The availability response returns a rate comment ID;
     * while a description is returned in the other steps of the booking process.
     * In the availability response it is possible that certain rates have a comment
     * associated that the hotelier wants to disclose to the final passenger before they book.
     * @var string
     */
    private $rateCommentsId;

    /**
     * Internal rate key to be used for confirmation
     * @var string
     */
    private $rateKey;

    /**
     * reference EnumRateClass
     * @var string
     *
     * NOR : Normal
     * NRF : Non-refundable
     * SPE : Special
     * OFE : Offer
     * PAQ : Package
     * NRP : Non-refundable package
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
     * Room net price
     * @var float
     */
    private $net;

    /**
     * Number of rooms available for a particular room type
     * @var integer
     */
    private $allotment;

    /**
     * reference EnumPaymentType
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
     * @var string
     */
    private $boardName;

    /**
     * @var CancellationPolicy[]
     */
    private $cancellationPolicies;

    /**
     * Agency Commission (Take in consideration this field)
     * @var float
     */
    private $discount;

    /**
     * Agency Commission in Percentage
     * @var float
     */
    private $discountPCT;

    /**
     * Commission for commissionable model
     * @var float
     */
    private $comission;

    /**
     * VAT commission
     * @var float
     */
    private $comissionVAT;

    /**
     * @var float
     */
    private $comissionPCT;

    /**
     * Room gross price in case it is included
     * @var float
     */
    private $sellingRate;

    /**
     * Room gross price in hotelCurrency(for the pay at hotel model)
     * @var float
     */
    private $hotelSellingRate;



    /**
     * Hotel currency  (for pay at hotel model)
     * @var string
     */
    private $hotelCurrency;

    /**
     * Identifies if the rate price is recommended
     * @var boolean
     */
    private $hotelMandatory;

    /**
     * Number of rooms requested with the same occupancy
     * @var integer
     */
    private $rooms;

    /**
     * 	Number of adults for the room
     * @var integer
     */
    private $adults;

    /**
     * Number of children requested
     * @var integer
     */
    private $children;

    /**
     * Children ages separated by commas
     * @var string
     */
    private $childrenAges;

    /**
     * List of prices with taxes included or excluded
     * @var Tax[]
     */
    private $taxes;

    /**
     * List of promotions for a particular rate
     * @var Promotion[]
     */
    private $promotions;

    /**
     * List of offers
     * @var Offer[]
     */
    private $offers;

    /**
     *
     * @var DailyPrice[]
     */
    private $dailyPrices;

    /**
     * List of rates for the flexible dates with availability
     * @var ShiftRate[]
     */
    private $shifts;

    /**
     * @return string
     */
    public function getRateCommentsId(): string
    {
        return $this->rateCommentsId;
    }

    /**
     * @param string $rateCommentsId
     * @return Rate
     */
    public function setRateCommentsId(string $rateCommentsId): Rate
    {
        $this->rateCommentsId = $rateCommentsId;
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
     * @return Rate
     */
    public function setRateKey(string $rateKey): Rate
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
     * @return Rate
     */
    public function setRateClass(string $rateClass): Rate
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
     * @return Rate
     */
    public function setRateType(string $rateType): Rate
    {
        $this->rateType = $rateType;
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
     * @return Rate
     */
    public function setNet(float $net): Rate
    {
        $this->net = $net;
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
     * @return Rate
     */
    public function setAllotment(int $allotment): Rate
    {
        $this->allotment = $allotment;
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
     * @return Rate
     */
    public function setPaymentType(string $paymentType): Rate
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
     * @return Rate
     */
    public function setPackaging(bool $packaging): Rate
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
     * @return Rate
     */
    public function setBoardCode(string $boardCode): Rate
    {
        $this->boardCode = $boardCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getBoardName(): string
    {
        return $this->boardName;
    }

    /**
     * @param string $boardName
     * @return Rate
     */
    public function setBoardName(string $boardName): Rate
    {
        $this->boardName = $boardName;
        return $this;
    }

    /**
     * @return CancellationPolicy[]
     */
    public function getCancellationPolicies(): array
    {
        return $this->cancellationPolicies;
    }

    /**
     * @param CancellationPolicy[] $cancellationPolicies
     * @return Rate
     */
    public function setCancellationPolicies(array $cancellationPolicies): Rate
    {
        $this->cancellationPolicies = $cancellationPolicies;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscount(): float
    {
        return $this->discount;
    }

    /**
     * @param float $discount
     * @return Rate
     */
    public function setDiscount(float $discount): Rate
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountPCT(): float
    {
        return $this->discountPCT;
    }

    /**
     * @param float $discountPCT
     * @return Rate
     */
    public function setDiscountPCT(float $discountPCT): Rate
    {
        $this->discountPCT = $discountPCT;
        return $this;
    }

    /**
     * @return float
     */
    public function getComission(): float
    {
        return $this->comission;
    }

    /**
     * @param float $comission
     * @return Rate
     */
    public function setComission(float $comission): Rate
    {
        $this->comission = $comission;
        return $this;
    }

    /**
     * @return float
     */
    public function getComissionVAT(): float
    {
        return $this->comissionVAT;
    }

    /**
     * @param float $comissionVAT
     * @return Rate
     */
    public function setComissionVAT(float $comissionVAT): Rate
    {
        $this->comissionVAT = $comissionVAT;
        return $this;
    }

    /**
     * @return float
     */
    public function getComissionPCT(): float
    {
        return $this->comissionPCT;
    }

    /**
     * @param float $comissionPCT
     * @return Rate
     */
    public function setComissionPCT(float $comissionPCT): Rate
    {
        $this->comissionPCT = $comissionPCT;
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
     * @return Rate
     */
    public function setSellingRate(float $sellingRate): Rate
    {
        $this->sellingRate = $sellingRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getHotelSellingRate(): float
    {
        return $this->hotelSellingRate;
    }

    /**
     * @param float $hotelSellingRate
     * @return Rate
     */
    public function setHotelSellingRate(float $hotelSellingRate): Rate
    {
        $this->hotelSellingRate = $hotelSellingRate;
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
     * @return Rate
     */
    public function setHotelCurrency(string $hotelCurrency): Rate
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
     * @return Rate
     */
    public function setHotelMandatory(bool $hotelMandatory): Rate
    {
        $this->hotelMandatory = $hotelMandatory;
        return $this;
    }

    /**
     * @return int
     */
    public function getRooms(): int
    {
        return $this->rooms;
    }

    /**
     * @param int $rooms
     * @return Rate
     */
    public function setRooms(int $rooms): Rate
    {
        $this->rooms = $rooms;
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
     * @return Rate
     */
    public function setAdults(int $adults): Rate
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
     * @return Rate
     */
    public function setChildren(int $children): Rate
    {
        $this->children = $children;
        return $this;
    }

    /**
     * @return string
     */
    public function getChildrenAges(): string
    {
        return $this->childrenAges;
    }

    /**
     * @param string $childrenAges
     * @return Rate
     */
    public function setChildrenAges(string $childrenAges): Rate
    {
        $this->childrenAges = $childrenAges;
        return $this;
    }

    /**
     * @return Tax[]
     */
    public function getTaxes(): array
    {
        return $this->taxes;
    }

    /**
     * @param Tax[] $taxes
     * @return Rate
     */
    public function setTaxes(array $taxes): Rate
    {
        $this->taxes = $taxes;
        return $this;
    }

    /**
     * @return Promotion[]
     */
    public function getPromotions(): array
    {
        return $this->promotions;
    }

    /**
     * @param Promotion[] $promotions
     * @return Rate
     */
    public function setPromotions(array $promotions): Rate
    {
        $this->promotions = $promotions;
        return $this;
    }

    /**
     * @return Offer[]
     */
    public function getOffers(): array
    {
        return $this->offers;
    }

    /**
     * @param Offer[] $offers
     * @return Rate
     */
    public function setOffers(array $offers): Rate
    {
        $this->offers = $offers;
        return $this;
    }

    /**
     * @return DailyPrice[]
     */
    public function getDailyPrices(): array
    {
        return $this->dailyPrices;
    }

    /**
     * @param DailyPrice[] $dailyPrices
     * @return Rate
     */
    public function setDailyPrices(array $dailyPrices): Rate
    {
        $this->dailyPrices = $dailyPrices;
        return $this;
    }

    /**
     * @return ShiftRate[]
     */
    public function getShifts(): array
    {
        return $this->shifts;
    }

    /**
     * @param ShiftRate[] $shifts
     * @return Rate
     */
    public function setShifts(array $shifts): Rate
    {
        $this->shifts = $shifts;
        return $this;
    }



}