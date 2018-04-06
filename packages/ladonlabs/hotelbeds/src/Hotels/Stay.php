<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/23/18
 * Time: 9:29 PM
 */

namespace ladonlabs\hotelbeds\Hotels;


use ladonlabs\hotelbeds\SerializationTrait;

/**
 * Class Stay
 * @package ladonlabs\hotelbeds\Hotels
 */
class Stay implements \JsonSerializable
{
    use SerializationTrait;

    /** @var string */
    private $checkIn;

    /** @var string */
    private $checkOut;

    /** @var integer */
    private $shiftDays;

    /** @var boolean */
    private $allowOnlyShift;

    /**
     * Stay constructor.
     * @param string $checkIn
     * @param string $checkOut
     * @param int $shiftDays
     * @param bool $allowOnlyShift
     */
    public function __construct( $checkIn,  $checkOut)
    {
        $this->checkIn = $checkIn;
        $this->checkOut = $checkOut;
    }




    /**
     * @return int
     */
    public function getShiftDays(): int
    {
        return $this->shiftDays;
    }

    /**
     * @param int $shiftDays
     * @return Stay
     */
    public function setShiftDays($shiftDays): Stay
    {
        $this->shiftDays = $shiftDays;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAllowOnlyShift(): bool
    {
        return $this->allowOnlyShift;
    }

    /**
     * @param bool $allowOnlyShift
     * @return Stay
     */
    public function setAllowOnlyShift($allowOnlyShift): Stay
    {
        $this->allowOnlyShift = $allowOnlyShift;
        return $this;
    }

    /**
     * @return string
     */
    public function getCheckIn(): string
    {
        return $this->checkIn;
    }

    /**
     * @param string $checkIn
     * @return Stay
     */
    public function setCheckIn(string $checkIn): Stay
    {
        $this->checkIn = $checkIn;
        return $this;
    }

    /**
     * @return string
     */
    public function getCheckOut(): string
    {
        return $this->checkOut;
    }

    /**
     * @param string $checkOut
     * @return Stay
     */
    public function setCheckOut(string $checkOut): Stay
    {
        $this->checkOut = $checkOut;
        return $this;
    }




}