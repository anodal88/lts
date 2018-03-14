<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/8/18
 * Time: 11:50 PM
 */

namespace ladonlabs\sabrehotel;


use App\Contracts\BookingInterface;
use App\Contracts\HotelProviderInterface;
use App\Contracts\StayInterface;

use Illuminate\Support\Facades\Facade;


class SabreHotelFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sabre.hotel';
    }


}