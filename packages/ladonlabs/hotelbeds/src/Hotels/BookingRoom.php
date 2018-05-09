<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <anodal@reloquest.com>
 * Date: 4/25/18
 * Time: 10:14 PM
 */

namespace ladonlabs\hotelbeds\Hotels;


use ladonlabs\hotelbeds\SerializationTrait;

class BookingRoom implements \JsonSerializable
{
    use SerializationTrait;

    /**
     * @var string
     */
    private $rateKey;

    /**
     * @var BookingRoomPax[]
     */
    private $paxes;

    /**
     * @return string
     */
    public function getRateKey(): string
    {
        return $this->rateKey;
    }

    /**
     * @param string $rateKey
     * @return BookingRoom
     */
    public function setRateKey(string $rateKey): BookingRoom
    {
        $this->rateKey = $rateKey;
        return $this;
    }

    /**
     * @return BookingRoomPax[]
     */
    public function getPaxes(): array
    {
        return $this->paxes;
    }

    /**
     * @param BookingRoomPax[] $paxes
     * @return BookingRoom
     */
    public function setPaxes(array $paxes): BookingRoom
    {
        $this->paxes = $paxes;
        return $this;
    }


}