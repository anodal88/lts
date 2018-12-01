<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 4/20/18
 * Time: 9:56 PM
 */

namespace ladonlabs\hotelbeds\Hotels;


use ladonlabs\hotelbeds\SerializationTrait;

class CheckRatesRQ implements \JsonSerializable
{
    use SerializationTrait;
    /**
     * @var string
     */
    private $language;
    /**
     * @var string
     */
    private $upselling="True";

    /**
     * @var RoomToCheck[]
     */
    private $rooms=[];

    public function addRoom(RoomToCheck $room){
        $this->rooms[]=$room;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return CheckRatesRQ
     */
    public function setLanguage(string $language): CheckRatesRQ
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpselling(): string
    {
        return $this->upselling;
    }

    /**
     * @param string $upselling
     * @return CheckRatesRQ
     */
    public function setUpselling(string $upselling): CheckRatesRQ
    {
        $this->upselling = $upselling;
        return $this;
    }

    /**
     * @return RoomToCheck[]
     */
    public function getRooms(): array
    {
        return $this->rooms;
    }

    /**
     * @param RoomToCheck[] $rooms
     * @return CheckRatesRQ
     */
    public function setRooms(array $rooms): CheckRatesRQ
    {
        $this->rooms = $rooms;
        return $this;
    }


}