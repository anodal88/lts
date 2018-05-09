<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ladonlabs\hotelbeds\HotelBedsProxy;
use ladonlabs\hotelbeds\Hotels\Availability;
use ladonlabs\hotelbeds\Hotels\BookingHolder;
use ladonlabs\hotelbeds\Hotels\BookingRoom;
use ladonlabs\hotelbeds\Hotels\BookingRoomPax;
use ladonlabs\hotelbeds\Hotels\BookingRQ;
use ladonlabs\hotelbeds\Hotels\CheckRatesRQ;
use ladonlabs\hotelbeds\Hotels\EnumRateType;
use ladonlabs\hotelbeds\Hotels\HotelApiContext;
use ladonlabs\hotelbeds\Hotels\Occupancy;
use ladonlabs\hotelbeds\Hotels\RoomToCheck;
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
        return view('home');
        //return $this->testBooking();
        //return $this->testContent();
        /**
         * @var HotelApiContext $apiContext
         * With this profile i can use the same integration for multiple companies
         */
        $apiContext = new HotelApiContext("reaugkrpm4juw26pufz8cmkq", "pXxZXMKuMG");
        $stay = new Stay((new \DateTime())->format("Y-m-d"), (new \DateTime())->modify('+2 day')->format("Y-m-d"));
        $occupancy = new Occupancy(1, 1, 0);
        $hotels = [
            1067, 1070, 1075, 135813, 145214, 1506, 1508, 1526, 1533, 1539, 1550, 161032, 170542, 182125, 187939, 212167, 215417, 228671, 229318, 23476
        ];
        $avalilability = (new Availability())->setHotels($hotels)->setStay($stay)->addOccupancy($occupancy);
        $response = HotelBeds::setHotelContext($apiContext)->search($avalilability);
        dump("availability Response:",$response);
        $rate = $response['hotels']['hotels'][0]['rooms'][1]['rates'][0] ?? null;
        $rateType = $rate['rateType'] ?? null;
        dump("RateType:",$rateType);
        $rateKey = $rate['rateKey'] ?? null;
        dump("RateKey:",$rateKey);

        //recheck usage
        if($rateType && $rateKey && $rateType==EnumRateType::RATE_TYPE_RECHECK){
            $roomRate = new RoomToCheck($rateKey);
            $rechekcRQ = new CheckRatesRQ();
            $rechekcRQ->addRoom($roomRate);
            $recheckResponse = HotelBeds::setHotelContext($apiContext)->checkRates($rechekcRQ);
            dump("RecheckResponse",$recheckResponse);
        }
        $rateKeyBook = $recheckResponse['hotel']['rooms'][0]['rates'][0]['rateKey']??NULL;
        dump("rateKeyBook:",$rateKeyBook);
        $bookingRq = new BookingRQ();
        $roomsToBook = [];
        $roomBookingPaxes=[];
        $bookingRoomPax = new BookingRoomPax(1,"Antonio","Delgado");

        $roomBookingPaxes[]=$bookingRoomPax;
        $room = (new BookingRoom())->setRateKey($rateKeyBook)
            ->setPaxes($roomBookingPaxes);
        $roomsToBook[]=$room;
        $bookingHolder = (new BookingHolder())->setName("Antonio")->setSurname("Delgado");
        $bookingRq->setClientReference("ALK1254")
            ->setHolder($bookingHolder)
            ->setRooms($roomsToBook);
        $bookingResponse = HotelBeds::setHotelContext($apiContext)->book($bookingRq);
        dump("booking Response",$bookingResponse);exit;
        exit;

        return view('home');
    }



    public function testContent()
    {
        /**
         * @var HotelApiContext $apiContext
         * With this profile i can use the same integration for multiple companies
         */
        $apiContext = new HotelApiContext("reaugkrpm4juw26pufz8cmkq", "pXxZXMKuMG");
        $response = HotelBeds::setHotelContext($apiContext)->getHotelsContent(5000, 5002);

    }

    public function testBooking(){
        // Booking Test
        $apiContext = new HotelApiContext("reaugkrpm4juw26pufz8cmkq", "pXxZXMKuMG");
        $bookingRq = new BookingRQ();
        $roomsToBook = [];
        $roomBookingPaxes=[];
        $bookingRoomPax = new BookingRoomPax(1,"Antonio","Delgado");

        $roomBookingPaxes[]=$bookingRoomPax;
        $room = (new BookingRoom())->setRateKey('20180427|20180429|W|1|23476|TPL.ST|ID_B2B_43|FB|FIT|1~1~0||N@D09E61B716B244C4B09C0745707CA1E60402')
            ->setPaxes($roomBookingPaxes);
        $roomsToBook[]=$room;
        $bookingHolder = (new BookingHolder())->setName("Antonio")->setSurname("Delgado");
        $bookingRq->setClientReference("ALK1254")
            ->setHolder($bookingHolder)
            ->setRooms($roomsToBook);
        $bookingResponse = HotelBeds::setHotelContext($apiContext)->book($bookingRq);
        dump($bookingResponse);exit;
    }

    public function getType()
    {
        /**
         * @var HotelApiContext $apiContext
         * With this profile i can use the same integration for multiple companies
         */
        $apiContext = new HotelApiContext("reaugkrpm4juw26pufz8cmkq", "pXxZXMKuMG");
        $response = HotelBeds::setHotelContext($apiContext)->getContentType(HotelBedsProxy::TYPE_TERMINALS, 1, 5);
    }

}
