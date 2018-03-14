<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/8/18
 * Time: 11:07 PM
 */

namespace App\Contracts;


interface HotelProviderInterface
{
    /**
     * @param StayInterface $stay
     * @return mixed
     */
    public function search(StayInterface $stay);

    /**
     * @param BookingInterface $booking
     * @return mixed
     */
    public function book(BookingInterface $booking);

    /**
     * @param $itineraryID
     * @return mixed
     */
    public function retrieve($itineraryID);

    /**
     * @param $itineraryId
     * @param BookingInterface $booking
     * @return mixed
     */
    public function update($itineraryId, BookingInterface $booking);

    /**
     * @param BookingInterface $booking
     * @return mixed
     */
    public function cancel(BookingInterface $booking);

    /**
     * @param $property_code
     * @return mixed
     */
    public function getPropertyDetails($property_code);

    /**
     * @param $property_code
     * @return mixed
     */
    public function getAvailableRooms($property_code);

    /**
     * @param $property_code
     * @return mixed
     */
    public function getPaymentTypes($property_code);


}