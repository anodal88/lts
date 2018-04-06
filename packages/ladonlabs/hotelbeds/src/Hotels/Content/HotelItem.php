<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/25/18
 * Time: 10:32 PM
 */

namespace ladonlabs\hotelbeds\Hotels\Content;


class HotelItem
{

    /**
     * @var integer
     */
    private $code;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $countryCode;

    /**
     * @var string
     */
    private $destinationCode;

    /**
     * @var integer
     */
    private $zoneCode;

    /**
     * an array of coordinates that contains latitude and longitude
     * @var \stdClass
     */
    private $coordinates;

    /**
     * @var string
     */
    private $categoryCode;

    /**
     * @var string
     */
    private $categoryGroupCode;

    /**
     * @var string
     */
    private $chainCode;

    /**
     * @var string
     */
    private $accommodationTypeCode;

    /**
     * @var array
     */
    private $boardCodes;

    /**
     * @var array
     */
    private $segmentCodes;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $postalCode;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $license;

    /**
     * @var array
     */
    private $phones;

    /**
     * @var array
     */
    private $rooms;

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @param int $code
     * @return HotelItem
     */
    public function setCode(int $code): HotelItem
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return HotelItem
     */
    public function setName(string $name): HotelItem
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return HotelItem
     */
    public function setCountryCode(string $countryCode): HotelItem
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getDestinationCode(): string
    {
        return $this->destinationCode;
    }

    /**
     * @param string $destinationCode
     * @return HotelItem
     */
    public function setDestinationCode(string $destinationCode): HotelItem
    {
        $this->destinationCode = $destinationCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getZoneCode(): int
    {
        return $this->zoneCode;
    }

    /**
     * @param int $zoneCode
     * @return HotelItem
     */
    public function setZoneCode(int $zoneCode): HotelItem
    {
        $this->zoneCode = $zoneCode;
        return $this;
    }

    /**
     * @return \stdClass
     */
    public function getCoordinates(): \stdClass
    {
        return $this->coordinates;
    }

    /**
     * @param \stdClass $coordinates
     * @return HotelItem
     */
    public function setCoordinates(\stdClass $coordinates): HotelItem
    {
        $this->coordinates = $coordinates;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategoryCode(): string
    {
        return $this->categoryCode;
    }

    /**
     * @param string $categoryCode
     * @return HotelItem
     */
    public function setCategoryCode(string $categoryCode): HotelItem
    {
        $this->categoryCode = $categoryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategoryGroupCode(): string
    {
        return $this->categoryGroupCode;
    }

    /**
     * @param string $categoryGroupCode
     * @return HotelItem
     */
    public function setCategoryGroupCode(string $categoryGroupCode): HotelItem
    {
        $this->categoryGroupCode = $categoryGroupCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getChainCode(): string
    {
        return $this->chainCode;
    }

    /**
     * @param string $chainCode
     * @return HotelItem
     */
    public function setChainCode(string $chainCode): HotelItem
    {
        $this->chainCode = $chainCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccommodationTypeCode(): string
    {
        return $this->accommodationTypeCode;
    }

    /**
     * @param string $accommodationTypeCode
     * @return HotelItem
     */
    public function setAccommodationTypeCode(string $accommodationTypeCode): HotelItem
    {
        $this->accommodationTypeCode = $accommodationTypeCode;
        return $this;
    }

    /**
     * @return array
     */
    public function getBoardCodes(): array
    {
        return $this->boardCodes;
    }

    /**
     * @param array $boardCodes
     * @return HotelItem
     */
    public function setBoardCodes(array $boardCodes): HotelItem
    {
        $this->boardCodes = $boardCodes;
        return $this;
    }

    /**
     * @return array
     */
    public function getSegmentCodes(): array
    {
        return $this->segmentCodes;
    }

    /**
     * @param array $segmentCodes
     * @return HotelItem
     */
    public function setSegmentCodes(array $segmentCodes): HotelItem
    {
        $this->segmentCodes = $segmentCodes;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return HotelItem
     */
    public function setAddress(string $address): HotelItem
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return HotelItem
     */
    public function setPostalCode(string $postalCode): HotelItem
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return HotelItem
     */
    public function setCity(string $city): HotelItem
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return HotelItem
     */
    public function setEmail(string $email): HotelItem
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getLicense(): string
    {
        return $this->license;
    }

    /**
     * @param string $license
     * @return HotelItem
     */
    public function setLicense(string $license): HotelItem
    {
        $this->license = $license;
        return $this;
    }

    /**
     * @return array
     */
    public function getPhones(): array
    {
        return $this->phones;
    }

    /**
     * @param array $phones
     * @return HotelItem
     */
    public function setPhones(array $phones): HotelItem
    {
        $this->phones = $phones;
        return $this;
    }

    /**
     * @return array
     */
    public function getRooms(): array
    {
        return $this->rooms;
    }

    /**
     * @param array $rooms
     * @return HotelItem
     */
    public function setRooms(array $rooms): HotelItem
    {
        $this->rooms = $rooms;
        return $this;
    }



}