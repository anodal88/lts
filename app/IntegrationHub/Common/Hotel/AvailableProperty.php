<?php

namespace App\IntegrationHub\Common\Hotel;

use App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\AvailabilityOption;

class AvailableProperty
{
    protected $name;

    protected $address;

    protected $rating;

    protected $price;

    protected $currency;

    protected $propertyCode;

    protected $photo;

    protected $latitude;

    protected $longitude;

    protected $amenities=[];

    protected $provider_code;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return AvailableProperty
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     * @return AvailableProperty
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param mixed $rating
     * @return AvailableProperty
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     * @return AvailableProperty
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     * @return AvailableProperty
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPropertyCode()
    {
        return $this->propertyCode;
    }

    /**
     * @param mixed $propertyCode
     * @return AvailableProperty
     */
    public function setPropertyCode($propertyCode)
    {
        $this->propertyCode = $propertyCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     * @return AvailableProperty
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     * @return AvailableProperty
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     * @return AvailableProperty
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @return array
     */
    public function getAmenities(): array
    {
        return $this->amenities;
    }

    /**
     * @param array $amenities
     * @return AvailableProperty
     */
    public function setAmenities(array $amenities): AvailableProperty
    {
        $this->amenities = $amenities;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProviderCode()
    {
        return $this->provider_code;
    }

    /**
     * @param mixed $provider_code
     * @return AvailableProperty
     */
    public function setProviderCode($provider_code)
    {
        $this->provider_code = $provider_code;
        return $this;
    }



}
