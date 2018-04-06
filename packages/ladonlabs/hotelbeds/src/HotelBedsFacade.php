<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/21/18
 * Time: 10:00 PM
 */

namespace ladonlabs\hotelbeds;


use Illuminate\Support\Facades\Facade;

class HotelBedsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'hotelbeds';
    }
}