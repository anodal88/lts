<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/24/18
 * Time: 2:43 AM
 */

namespace ladonlabs\hotelbeds\Hotels;

/**
 * Class DailyPrice
 * @package ladonlabs\hotelbeds\Hotels
 */
class DailyPrice
{

    /**
     * Day number of the searched period
     * @var integer
     */
    private $offset;

    /**
     * Daily selling price for the room
     * @var float
     */
    private  $dailySellingRate;

    /**
     * Daily net price
     * @var float
     */
    private $dailyNet;

    /**
     * DailyPrice constructor.
     * @param int $offset
     * @param float $dailySellingRate
     * @param float $dailyNet
     */
    public function __construct(int $offset, float $dailySellingRate, float $dailyNet)
    {
        $this->offset = $offset;
        $this->dailySellingRate = $dailySellingRate;
        $this->dailyNet = $dailyNet;
    }

    /**
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     * @return DailyPrice
     */
    public function setOffset(int $offset): DailyPrice
    {
        $this->offset = $offset;
        return $this;
    }

    /**
     * @return float
     */
    public function getDailySellingRate(): float
    {
        return $this->dailySellingRate;
    }

    /**
     * @param float $dailySellingRate
     * @return DailyPrice
     */
    public function setDailySellingRate(float $dailySellingRate): DailyPrice
    {
        $this->dailySellingRate = $dailySellingRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getDailyNet(): float
    {
        return $this->dailyNet;
    }

    /**
     * @param float $dailyNet
     * @return DailyPrice
     */
    public function setDailyNet(float $dailyNet): DailyPrice
    {
        $this->dailyNet = $dailyNet;
        return $this;
    }



}