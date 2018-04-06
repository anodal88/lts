<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/24/18
 * Time: 1:32 AM
 */

namespace ladonlabs\hotelbeds\Hotels;

/**
 * Class Room
 * @package ladonlabs\hotelbeds\Hotels
 */
class Room
{

    /**
     * @var
     */
    private $code;

    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $rates;

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     * @return Room
     */
    public function setCode($code)
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
     * @return Room
     */
    public function setName(string $name): Room
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array
     */
    public function getRates(): array
    {
        return $this->rates;
    }

    /**
     * @param array $rates
     * @return Room
     */
    public function setRates(array $rates): Room
    {
        $this->rates = $rates;
        return $this;
    }


}