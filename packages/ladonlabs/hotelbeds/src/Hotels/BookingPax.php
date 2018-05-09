<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <anodal@reloquest.com>
 * Date: 4/25/18
 * Time: 9:52 PM
 */

namespace ladonlabs\hotelbeds\Hotels;


class BookingPax extends Pax
{
    /**
     * @var string
     */
    private $roomId;

    /**
     * @return string
     */
    public function getRoomId(): string
    {
        return $this->roomId;
    }

    /**
     * @param string $roomId
     * @return BookingPax
     */
    public function setRoomId(string $roomId): BookingPax
    {
        $this->roomId = $roomId;
        return $this;
    }




}