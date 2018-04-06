<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/24/18
 * Time: 2:25 AM
 */

namespace ladonlabs\hotelbeds\Hotels;

/**
 * Class Tax
 * @package ladonlabs\hotelbeds\Hotels
 */
class Tax
{
    /**
     * Indicates if the tax is included in the price or not
     * @var boolean
     */
    private $included;

    /**
     * @var float
     */
    private $percent;

    /**
     * Value of the tax in hotel currency if the tax is not included in the price
     * @var float
     */
    private $amount;

    /**
     * Currency of the tax amount
     * @var string
     */
    private $currency;

    /**
     * Type of the tax:
     * TAX
     * FEE
     * @var string
     */
    private $type;

    /**
     * Net amount of the tax in the client configured currency,
     * returned in case the currency of the hotel is different from the client currency
     * @var float
     */
    private $clientAmount;

    /**
     * Client configured currency in case the currency of the hotel is different from the client currency
     * @var string
     */
    private $clientCurrency;

    /**
     * @return bool
     */
    public function isIncluded(): bool
    {
        return $this->included;
    }

    /**
     * @param bool $included
     * @return Tax
     */
    public function setIncluded(bool $included): Tax
    {
        $this->included = $included;
        return $this;
    }

    /**
     * @return float
     */
    public function getPercent(): float
    {
        return $this->percent;
    }

    /**
     * @param float $percent
     * @return Tax
     */
    public function setPercent(float $percent): Tax
    {
        $this->percent = $percent;
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
     * @return Tax
     */
    public function setAmount(float $amount): Tax
    {
        $this->amount = $amount;
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
     * @return Tax
     */
    public function setCurrency(string $currency): Tax
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Tax
     */
    public function setType(string $type): Tax
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return float
     */
    public function getClientAmount(): float
    {
        return $this->clientAmount;
    }

    /**
     * @param float $clientAmount
     * @return Tax
     */
    public function setClientAmount(float $clientAmount): Tax
    {
        $this->clientAmount = $clientAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientCurrency(): string
    {
        return $this->clientCurrency;
    }

    /**
     * @param string $clientCurrency
     * @return Tax
     */
    public function setClientCurrency(string $clientCurrency): Tax
    {
        $this->clientCurrency = $clientCurrency;
        return $this;
    }


}