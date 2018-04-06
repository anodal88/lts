<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/23/18
 * Time: 9:46 PM
 */

namespace ladonlabs\hotelbeds\Hotels;

/**
 * Class Destination
 * @package ladonlabs\hotelbeds\Hotels
 */
class Destination
{

    /**
     * Destination code for hotel location (mandatory if the destination element is used)
     * @var string
     */
    private $code;

    /**
     * Destination zone for hotel location
     * @var integer
     */
    private $zone;

    /**
     * Destination constructor.
     * @param string $code
     * @param int $zone
     */
    public function __construct($code, $zone)
    {
        $this->code = $code;
        $this->zone = $zone;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return Destination
     */
    public function setCode($code): Destination
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return int
     */
    public function getZone(): int
    {
        return $this->zone;
    }

    /**
     * @param int $zone
     * @return Destination
     */
    public function setZone($zone): Destination
    {
        $this->zone = $zone;
        return $this;
    }


}