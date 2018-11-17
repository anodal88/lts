<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class Source
{

    /**
     * @var BookingChannel $BookingChannel
     */
    protected $BookingChannel = null;

    /**
     * @param BookingChannel $BookingChannel
     */
    public function __construct($BookingChannel = null)
    {
      $this->BookingChannel = $BookingChannel;
    }

    /**
     * @return BookingChannel
     */
    public function getBookingChannel()
    {
      return $this->BookingChannel;
    }

    /**
     * @param BookingChannel $BookingChannel
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\Source
     */
    public function setBookingChannel($BookingChannel)
    {
      $this->BookingChannel = $BookingChannel;
      return $this;
    }

}