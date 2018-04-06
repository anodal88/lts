<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/23/18
 * Time: 10:16 PM
 */

namespace ladonlabs\hotelbeds\Hotels;

/**
 * Class Keywords
 * @package ladonlabs\hotelbeds\Hotels
 */
class Keywords
{

    /**
     * @var array of keyword codes
     */
    private $keyword;

    /**
     * @var boolean
     */
    private $allIncluded;

    /**
     * Keywords constructor.
     * @param array $keyword
     * @param bool $allIncluded
     */
    public function __construct(array $keyword = [], $allIncluded = false)
    {
        $this->keyword = $keyword;
        $this->allIncluded = $allIncluded;
    }

    /**
     * @return array
     */
    public function getKeyword(): array
    {
        return $this->keyword;
    }

    /**
     * @param array $keyword
     * @return Keywords
     */
    public function setKeyword(array $keyword): Keywords
    {
        $this->keyword = $keyword;
        return $this;
    }

    /**
     * @param $keyword
     */
    public function addKeyword($keyword)
    {
        $this->keyword[] = $keyword;
    }

    /**
     * @return bool
     */
    public function isAllIncluded(): bool
    {
        return $this->allIncluded;
    }

    /**
     * @param bool $allIncluded
     * @return Keywords
     */
    public function setAllIncluded($allIncluded): Keywords
    {
        $this->allIncluded = $allIncluded;
        return $this;
    }


}