<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/8/18
 * Time: 10:17 PM
 */


/*
   |--------------------------------------------------------------------------
   | sabre web services configurations parameters
   |--------------------------------------------------------------------------
   |
   | This file is for storing the credentials and versions to consume the
   | the sabre web services api
   |
   */

return [
    'version'=>'1.0',
    'hotel_endpoint'=>'https://api.test.hotelbeds.com/hotel-api/{version}/{path}',
    'hotel_availability_path'=>'hotels',
    'hotel_content_endpoint'=>'https://api.test.hotelbeds.com/hotel-content-api/{version}/{path}',
    'hotel_content_path'=>'hotels',
    'hotel_booking_path'=>'bookings',
    'hotel_check_rates_path'=>'checkrates',
    'hotel_secure_booking_endpoint'=>'https://api-secure.test.hotelbeds.com/hotel-api/1.0/bookings',
    'hotel_booking_endpoint'=>'https://api.test.hotelbeds.com/hotel-api/1.2/bookings',
    'hotel_types_path'=>'types/{type}',
    'image_path'=>'https://photos.hotelbeds.com/giata'
];