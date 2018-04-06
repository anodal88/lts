<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ladonlabs\hotelbeds\HotelBedsProxy;
use ladonlabs\hotelbeds\Hotels\Availability;
use ladonlabs\hotelbeds\Hotels\HotelApiContext;
use ladonlabs\hotelbeds\Hotels\Occupancy;
use ladonlabs\hotelbeds\Hotels\Stay;
use SabreHotel;
use HotelBeds;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return $this->testContent();
        /**
         * @var HotelApiContext $apiContext
         * With this profile i can use the same integration for multiple companies
         */
        $apiContext = new HotelApiContext("fky4akr3n3j52yavppkjg5bv", "9G4CNzhwsK");
        $stay = new Stay("2018-04-10", "2018-04-12");
        $occupancy = new Occupancy(1, 1, 0);
        $hotels = [
            1067, 1070, 1075, 135813, 145214, 1506, 1508, 1526, 1533, 1539, 1550, 161032, 170542, 182125, 187939, 212167, 215417, 228671, 229318, 23476
        ];
        $avalilability = (new Availability())->setHotels($hotels)->setStay($stay)->addOccupancy($occupancy);
        $response = HotelBeds::setHotelContext($apiContext)->search($avalilability);
        dump($response);
        exit;
        return view('home');
    }

    public function testContent()
    {
        /**
         * @var HotelApiContext $apiContext
         * With this profile i can use the same integration for multiple companies
         */
        $apiContext = new HotelApiContext("fky4akr3n3j52yavppkjg5bv", "9G4CNzhwsK");
        $response = HotelBeds::setHotelContext($apiContext)->getHotelsContent(5000, 5002);

    }

    public function getType()
    {
        /**
         * @var HotelApiContext $apiContext
         * With this profile i can use the same integration for multiple companies
         */
        $apiContext = new HotelApiContext("fky4akr3n3j52yavppkjg5bv", "9G4CNzhwsK");
        $response = HotelBeds::setHotelContext($apiContext)->getContentType(HotelBedsProxy::TYPE_TERMINALS,1,5);
    }

}
