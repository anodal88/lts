<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/9/18
 * Time: 1:14 AM
 */

namespace ladonlabs\sabrehotel;


use App\Contracts\BookingInterface;
use App\Contracts\HotelProviderInterface;
use App\Contracts\StayInterface;


class SabrePropertyProxy implements HotelProviderInterface
{

   protected $config;

   public function __construct($config)
   {
       $this->config = $config;
   }
    public function test()
    {
        $context = new Context($this->config);
        $client = new SabreClient($context);
        $client->createSession();
        dump($context);
        $client->closeSession();
        dump($context);exit;
    }
    /**
     * @param StayInterface $stay
     * @return mixed
     */
    public function search(StayInterface $stay)
    {
        // TODO: Implement search() method.
    }

    /**
     * @param BookingInterface $booking
     * @return mixed
     */
    public function book(BookingInterface $booking)
    {
        // TODO: Implement book() method.
    }

    /**
     * @param $itineraryID
     * @return mixed
     */
    public function retrieve($itineraryID)
    {
        // TODO: Implement retrieve() method.
    }

    /**
     * @param $itineraryId
     * @param BookingInterface $booking
     * @return mixed
     */
    public function update($itineraryId, BookingInterface $booking)
    {
        // TODO: Implement update() method.
    }

    /**
     * @param BookingInterface $booking
     * @return mixed
     */
    public function cancel(BookingInterface $booking)
    {
        // TODO: Implement cancel() method.
    }

    /**
     * @param $property_code
     * @return mixed
     */
    public function getPropertyDetails($property_code)
    {
        // TODO: Implement getPropertyDetails() method.
    }

    /**
     * @param $property_code
     * @return mixed
     */
    public function getAvailableRooms($property_code)
    {
        // TODO: Implement getAvailableRooms() method.
    }

    /**
     * @param $property_code
     * @return mixed
     */
    public function getPaymentTypes($property_code)
    {
        // TODO: Implement getPaymentTypes() method.
    }

}