<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <anodal@reloquest.com>
 * Date: 4/20/18
 * Time: 9:59 PM
 */

namespace ladonlabs\hotelbeds\Hotels;

use ladonlabs\hotelbeds\SerializationTrait;

class RoomToCheck implements \JsonSerializable
{
    use SerializationTrait;

    /**
     * @var string
     */
    private $rateKey;

    /**
     * RoomToCheck constructor.
     * @param string $rateKey
     */
    public function __construct(string $rateKey)
    {
        $this->rateKey = $rateKey;
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
     * @return RoomToCheck
     */
    public function setRateKey(string $rateKey): RoomToCheck
    {
        $this->rateKey = $rateKey;
        return $this;
    }


}