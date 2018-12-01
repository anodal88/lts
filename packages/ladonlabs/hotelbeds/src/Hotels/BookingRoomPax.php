<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 4/25/18
 * Time: 10:15 PM
 */

namespace ladonlabs\hotelbeds\Hotels;


use ladonlabs\hotelbeds\SerializationTrait;

class BookingRoomPax extends Pax
{

    /**
     * @var string
     */
    protected $roomId;

    /**
     * BookingRoomPax constructor.
     * @param string $roomId
     */
    public function __construct(string $roomId = "", $name = null, $surname = null)
    {
        parent::__construct();
        $this->name = $name;
        $this->surname = $surname;
        $this->roomId = $roomId;
    }

    /**
     * @return string
     */
    public function getRoomId(): string
    {
        return $this->roomId;
    }

    /**
     * @param string $roomId
     * @return BookingRoomPax
     */
    public function setRoomId(string $roomId): BookingRoomPax
    {
        $this->roomId = $roomId;
        return $this;
    }

    public function __toArray(){
        $result = [];
        $attributes = get_object_vars($this);
        foreach ($attributes as $key => $value) {
            if (!is_null($value)) {
                $result[$key] = $value;
            }
        }
        return $result;
    }

    public function jsonSerialize()
    {
        $serializationTarget = clone ($this);
        unset($serializationTarget->age);
        return $serializationTarget->__toArray();
    }
}