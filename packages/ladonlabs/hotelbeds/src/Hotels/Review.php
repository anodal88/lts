<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 4/5/18
 * Time: 9:22 PM
 */

namespace ladonlabs\hotelbeds\Hotels;

/**
 * Class Review
 * @package ladonlabs\hotelbeds\Hotels
 */
class Review
{

    /**
     * Rating value
     * @var integer
     */
    private $rate;

    /**
     * Total number of ratings for that particular hotel
     * @var integer
     */
    private $reviewCount;

    /**
     * reference EnumReviewProvider
     * Provider of the review. Posible values: "TRIPADVISOR", "HOTELBEDS"
     * @var string
     */
    private $type;

    /**
     * @return int
     */
    public function getRate(): int
    {
        return $this->rate;
    }

    /**
     * @param int $rate
     * @return Review
     */
    public function setRate(int $rate): Review
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * @return int
     */
    public function getReviewCount(): int
    {
        return $this->reviewCount;
    }

    /**
     * @param int $reviewCount
     * @return Review
     */
    public function setReviewCount(int $reviewCount): Review
    {
        $this->reviewCount = $reviewCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Review
     */
    public function setType(string $type): Review
    {
        $this->type = $type;
        return $this;
    }




}