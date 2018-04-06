<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/24/18
 * Time: 1:47 AM
 */

namespace ladonlabs\hotelbeds\Hotels;

/**
 * Class CancellationPolicy
 * @package ladonlabs\hotelbeds\Hotels
 */
class CancellationPolicy
{
    /**
     * Amount that will be charged after '@from' date
     * @var float
     */
    private $amount;

    /**
     * Date from which the amount will be charged in ISO 8601 format (yyyy-MM-ddTHH:mm:ssZ)
     * @var string
     */
    private $from;

    /**
     * Amount that will be charged after '@from' date, provided in hotel currency (for the pay at hotel model)
     * @var float
     */
    private $hotelAmount;

    /**
     * CancellationPolicy constructor.
     * @param float $amount
     * @param string $from
     */
    public function __construct(float $amount, string $from)
    {
        $this->amount = $amount;
        $this->from = $from;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return CancellationPolicy
     */
    public function setAmount(float $amount): CancellationPolicy
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getFrom(): string
    {
        return $this->from;
    }

    /**
     * @param string $from
     * @return CancellationPolicy
     */
    public function setFrom(string $from): CancellationPolicy
    {
        $this->from = $from;
        return $this;
    }




}