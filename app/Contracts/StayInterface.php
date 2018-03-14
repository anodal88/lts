<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/8/18
 * Time: 11:12 PM
 */

namespace App\Contracts;


interface StayInterface
{
    public function getArrivalDate();

    public function getDepartureDate();

    public function getDestination();

    public function getLatitude();

    public function getLongitude();

    public function getNumberOfRooms();


}