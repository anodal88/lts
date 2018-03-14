<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/9/18
 * Time: 10:00 PM
 */

namespace ladonlabs\sabrehotel;


class Filters
{
    private $ratings=[];
    private $minPrice=-1;
    private $maxPrice=-1;
    private $hotelName="";
    private $amenities=[];

    private $lowestToHigest=true;
    private $higestToLowest=false;
    private $proximity=true;

}