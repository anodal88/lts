<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <anodal@reloquest.com>
 * Date: 4/14/18
 * Time: 10:01 PM
 */

namespace ladonlabs\hotelbeds\Hotels;


class BookingFilter
{

    /**
     * @var \DateTime
     */
    private $start;

    /**
     * @var \DateTime
     */
    private $end;

    /**
     * @var string
     */
    private $status = BookingStatusEnum::ALL;

    /**
     * @var string
     */
    private $filterType = BookingFIlterTypeEnum::CREATION;

    /**
     * @var integer
     */
    private $from;

    /**
     * @var integer
     */
    private $to;

    /**
     * Comma separated for multiple countries
     * @var string
     */
    private $country;

    /**
     * Comma separated for multiple destination search
     * @var string
     */
    private $destination;

    /**
     * Comma separated for multiple search
     * @var string
     */
    private $hotel;

    public function __construct()
    {
        $this->start = new \DateTime();
        $this->end = (new \DateTime())->modify('7 day');
        $this->from = 1;
        $this->to = 100;
    }

    /**
     * @return \DateTime
     */
    public function getStart(): \DateTime
    {
        return $this->start;
    }

    /**
     * @param \DateTime $start
     * @return BookingFilter
     */
    public function setStart(\DateTime $start): BookingFilter
    {
        $this->start = $start;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEnd(): \DateTime
    {
        return $this->end;
    }

    /**
     * @param \DateTime $end
     * @return BookingFilter
     */
    public function setEnd(\DateTime $end): BookingFilter
    {
        $this->end = $end;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return BookingFilter
     */
    public function setStatus(string $status): BookingFilter
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getFilterType(): string
    {
        return $this->filterType;
    }

    /**
     * @param string $filterType
     * @return BookingFilter
     */
    public function setFilterType(string $filterType): BookingFilter
    {
        $this->filterType = $filterType;
        return $this;
    }

    /**
     * @return int
     */
    public function getFrom(): int
    {
        return $this->from;
    }

    /**
     * @param int $from
     * @return BookingFilter
     */
    public function setFrom(int $from): BookingFilter
    {
        $this->from = $from;
        return $this;
    }

    /**
     * @return int
     */
    public function getTo(): int
    {
        return $this->to;
    }

    /**
     * @param int $to
     * @return BookingFilter
     */
    public function setTo(int $to): BookingFilter
    {
        $this->to = $to;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return BookingFilter
     */
    public function setCountry(string $country): BookingFilter
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getDestination(): string
    {
        return $this->destination;
    }

    /**
     * @param string $destination
     * @return BookingFilter
     */
    public function setDestination(string $destination): BookingFilter
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * @return string
     */
    public function getHotel(): string
    {
        return $this->hotel;
    }

    /**
     * @param string $hotel
     * @return BookingFilter
     */
    public function setHotel(string $hotel): BookingFilter
    {
        $this->hotel = $hotel;
        return $this;
    }


}