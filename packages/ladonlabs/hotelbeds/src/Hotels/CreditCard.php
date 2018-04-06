<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 4/5/18
 * Time: 9:17 PM
 */

namespace ladonlabs\hotelbeds\Hotels;

/**
 * Class CreditCard
 * @package ladonlabs\hotelbeds\Hotels
 */
class CreditCard
{

    /**
     * Credit card code
     * @var integer
     */
    private $code;

    /**
     * @var string
     */
    private $name;

    /**
     * AT_HOTEL
     * AT_WEB
     * @var string
     */
    private $paymentType;

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @param int $code
     * @return CreditCard
     */
    public function setCode(int $code): CreditCard
    {
        $this->code = $code;
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
     * @return CreditCard
     */
    public function setName(string $name): CreditCard
    {
        $this->name = $name;
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
     * @return CreditCard
     */
    public function setPaymentType(string $paymentType): CreditCard
    {
        $this->paymentType = $paymentType;
        return $this;
    }


}