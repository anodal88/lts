<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ;

class Property
{

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @var string $Rating
     */
    protected $Rating = null;

    /**
     * @param string $Text
     * @param string $Rating
     */
    public function __construct($Text = null, $Rating = null)
    {
      $this->Text = $Text;
      $this->Rating = $Rating;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Property
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return string
     */
    public function getRating()
    {
      return $this->Rating;
    }

    /**
     * @param string $Rating
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Property
     */
    public function setRating($Rating)
    {
      $this->Rating = $Rating;
      return $this;
    }

}
