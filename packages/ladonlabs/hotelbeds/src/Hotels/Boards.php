<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/23/18
 * Time: 10:24 PM
 */

namespace ladonlabs\hotelbeds\Hotels;

/**
 * Class Boards
 * @package ladonlabs\hotelbeds\Hotels
 */
class Boards
{

    /**
     * The attribute indicates if the board list values should be excluded or included in the response
     * @var boolean
     */
    private $included;

    /**
     * Internal board code (mandatory if “boards” element is used)
     * @var array
     */
    private $board;

    /**
     * Boards constructor.
     * @param bool $included
     * @param array $board
     */
    public function __construct( $included,  $board=[])
    {
        $this->included = $included;
        $this->board = $board;
    }

    /**
     * @return bool
     */
    public function isIncluded(): bool
    {
        return $this->included;
    }

    /**
     * @param bool $included
     * @return Boards
     */
    public function setIncluded( $included): Boards
    {
        $this->included = $included;
        return $this;
    }

    /**
     * @return array
     */
    public function getBoard(): array
    {
        return $this->board;
    }

    /**
     * @param array $board
     * @return Boards
     */
    public function setBoard(array $board): Boards
    {
        $this->board = $board;
        return $this;
    }






}