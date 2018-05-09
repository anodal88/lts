<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/23/18
 * Time: 9:33 PM
 */

namespace ladonlabs\hotelbeds\Hotels;


use ladonlabs\hotelbeds\SerializationTrait;

/**
 * Class Pax
 * @package ladonlabs\hotelbeds\Hotels
 */
class Pax implements \JsonSerializable
{

    use SerializationTrait;

    const PAX_TYPE_ADULT = "AD";
    const PAX_TYPE_CHILD = "CH";

    /** @var string */
    protected $type;

    /** @var integer */
    protected $age;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $surname;

    /**
     * Pax constructor.
     * @param string $type
     * @param int $age
     * @param string $name
     * @param string $surname
     */
    public function __construct($type = self::PAX_TYPE_ADULT, $age = 25, $name = null, $surname = null)
    {
        $this->type = $type;
        $this->age = $age;
        $this->name = $name;
        $this->surname = $surname;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Pax
     */
    public function setType(string $type): Pax
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     * @return Pax
     */
    public function setAge(int $age): Pax
    {
        $this->age = $age;
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
     * @return Pax
     */
    public function setName(string $name): Pax
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
     * @return Pax
     */
    public function setSurname(string $surname): Pax
    {
        $this->surname = $surname;
        return $this;
    }


}