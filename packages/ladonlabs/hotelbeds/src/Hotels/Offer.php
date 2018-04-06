<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/24/18
 * Time: 2:34 AM
 */

namespace ladonlabs\hotelbeds\Hotels;

/**
 * Class Offer
 * @package ladonlabs\hotelbeds\Hotels
 */
class Offer
{
    /**
     * @var integer
     */
    private $code;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $name;

    /**
     * Offer constructor.
     * @param int $code
     * @param float $amount
     * @param string $name
     */
    public function __construct(int $code, float $amount, string $name)
    {
        $this->code = $code;
        $this->amount = $amount;
        $this->name = $name;
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
     * @return Offer
     */
    public function setCode(int $code): Offer
    {
        $this->code = $code;
        return $this;
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
     * @return Offer
     */
    public function setAmount(float $amount): Offer
    {
        $this->amount = $amount;
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
     * @return Offer
     */
    public function setName(string $name): Offer
    {
        $this->name = $name;
        return $this;
    }




}