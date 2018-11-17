<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ;

class Award
{

    /**
     * @var string $Provider
     */
    protected $Provider = null;

    /**
     * @var int $Rating
     */
    protected $Rating = null;

    /**
     * @param string $Provider
     * @param int $Rating
     */
    public function __construct($Provider = null, $Rating = null)
    {
      $this->Provider = $Provider;
      $this->Rating = $Rating;
    }

    /**
     * @return string
     */
    public function getProvider()
    {
      return $this->Provider;
    }

    /**
     * @param string $Provider
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Award
     */
    public function setProvider($Provider)
    {
      $this->Provider = $Provider;
      return $this;
    }

    /**
     * @return int
     */
    public function getRating()
    {
      return $this->Rating;
    }

    /**
     * @param int $Rating
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Award
     */
    public function setRating($Rating)
    {
      $this->Rating = $Rating;
      return $this;
    }

}
