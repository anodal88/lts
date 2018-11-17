<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <anodal@reloquest.com>
 * Date: 4/25/18
 * Time: 9:39 PM
 */

namespace ladonlabs\hotelbeds\Hotels;

use ladonlabs\hotelbeds\SerializationTrait;

class BookingRQ implements \JsonSerializable
{
    use SerializationTrait;

    /**
     * @var string
     */
    private $language;

    /**
     * Principal for all the rooms in the booking
     * @var BookingHolder
     */
    private $holder;

    /**
     * @var BookingRoom[]
     */
    private $rooms;

    /**
     * @var string
     */
    private $clientReference;

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return BookingRQ
     */
    public function setLanguage(string $language): BookingRQ
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return BookingHolder
     */
    public function getHolder(): BookingHolder
    {
        return $this->holder;
    }

    /**
     * @param BookingHolder $holder
     * @return BookingRQ
     */
    public function setHolder(BookingHolder $holder): BookingRQ
    {
        $this->holder = $holder;
        return $this;
    }

    /**
     * @return BookingRoom[]
     */
    public function getRooms(): array
    {
        return $this->rooms;
    }

    /**
     * @param BookingRoom[] $rooms
     * @return BookingRQ
     */
    public function setRooms(array $rooms): BookingRQ
    {
        $this->rooms = $rooms;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientReference(): string
    {
        return $this->clientReference;
    }

    /**
     * @param string $clientReference
     * @return BookingRQ
     */
    public function setClientReference(string $clientReference): BookingRQ
    {
        $this->clientReference = $clientReference;
        return $this;
    }

    /**
     * @return bool
     */
    public function needsSecurity(){
        return isset($this->paymentData);
    }
}