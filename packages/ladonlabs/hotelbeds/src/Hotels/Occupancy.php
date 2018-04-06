<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/23/18
 * Time: 9:38 PM
 */

namespace ladonlabs\hotelbeds\Hotels;


use ladonlabs\hotelbeds\SerializationTrait;

/**
 * Class Occupancy
 * @package ladonlabs\hotelbeds\Hotels
 */
class Occupancy implements \JsonSerializable
{
    use SerializationTrait;

    /**
     * Number of rooms
     * @var integer
     */
    private $rooms;

    /**
     * Number of adults per room
     * @var integer
     */
    private $adults;

    /**
     * Number of children per room
     * @var integer
     */
    private $children;

    /**
     * (mandatory when children are requested)
     * @var Pax[]
     */
    private $paxes;

    /**
     * Occupancy constructor.
     * @param int $rooms
     * @param int $adults
     * @param int $children
     * @param Pax[] $paxes
     */
    public function __construct($rooms, $adults, $children, array $paxes = [])
    {
        $this->rooms = $rooms;
        $this->adults = $adults;
        $this->children = $children;
        if(empty($paxes)){
            $this->autoGeneratePaxes();
        }else{
            $this->paxes = $paxes;
        }

    }

    /**
     * @return int
     */
    public function getRooms(): int
    {
        return $this->rooms;
    }

    /**
     * @param int $rooms
     * @return Occupancy
     */
    public function setRooms($rooms): Occupancy
    {
        $this->rooms = $rooms;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdults(): int
    {
        return $this->adults;
    }

    /**
     * @param int $adults
     * @return Occupancy
     */
    public function setAdults($adults): Occupancy
    {
        $this->adults = $adults;
        return $this;
    }

    /**
     * @return int
     */
    public function getChildren(): int
    {
        return $this->children;
    }

    /**
     * @param int $children
     * @return Occupancy
     */
    public function setChildren($children): Occupancy
    {
        $this->children = $children;
        return $this;
    }

    /**
     * @return Pax[]
     */
    public function getPaxes(): array
    {
        return $this->paxes;
    }

    /**
     * @param Pax[] $paxes
     * @return Occupancy
     */
    public function setPaxes(array $paxes): Occupancy
    {
        $this->paxes = $paxes;
        return $this;
    }

    /**
     * @return array|mixed
     */
    public function autoGeneratePaxes()
    {
        if(empty($this->paxes)){
            for($i=0;$i< $this->adults;$i++){
                $this->paxes[]=new Pax();
            }
            for($j=0;$j< $this->children;$j++){
                $this->paxes[]=new Pax(Pax::PAX_TYPE_CHILD,5);
            }
        }
    }

}