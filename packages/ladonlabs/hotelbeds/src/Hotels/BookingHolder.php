<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <anodal@reloquest.com>
 * Date: 4/25/18
 * Time: 10:12 PM
 */

namespace ladonlabs\hotelbeds\Hotels;


use ladonlabs\hotelbeds\SerializationTrait;

class BookingHolder implements \JsonSerializable
{
    use SerializationTrait;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $surname;



    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return BookingHolder
     */
    public function setName(string $name): BookingHolder
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     * @return BookingHolder
     */
    public function setSurname(string $surname): BookingHolder
    {
        $this->surname = $surname;
        return $this;
    }


}