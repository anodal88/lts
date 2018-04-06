<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 4/5/18
 * Time: 9:09 PM
 */

namespace ladonlabs\hotelbeds\Hotels;

/**
 * Class Keyword
 * @package ladonlabs\hotelbeds\Hotels
 */
class Keyword
{

    /**
     * @var integer
     */
    private $code;

    /**
     * @var integer
     */
    private $rating;

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @param int $code
     * @return Keyword
     */
    public function setCode(int $code): Keyword
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return int
     */
    public function getRating(): int
    {
        return $this->rating;
    }

    /**
     * @param int $rating
     * @return Keyword
     */
    public function setRating(int $rating): Keyword
    {
        $this->rating = $rating;
        return $this;
    }


}