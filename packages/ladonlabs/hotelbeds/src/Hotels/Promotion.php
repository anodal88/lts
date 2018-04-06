<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/24/18
 * Time: 2:22 AM
 */

namespace ladonlabs\hotelbeds\Hotels;

/**
 * Class Promotion
 * @package ladonlabs\hotelbeds\Hotels
 */
class Promotion
{

    /**
     * @var integer
     */
    private $code;

    /**
     * Promotion name
     * @var string
     */
    private $name;

    /**
     * Promotion remark
     * @var string
     */
    private $remark;

    /**
     * Promotion constructor.
     * @param int $code
     * @param string $name
     * @param string $remark
     */
    public function __construct(int $code, string $name, string $remark)
    {
        $this->code = $code;
        $this->name = $name;
        $this->remark = $remark;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @param int $code
     * @return Promotion
     */
    public function setCode(int $code): Promotion
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
     * @return Promotion
     */
    public function setName(string $name): Promotion
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getRemark(): string
    {
        return $this->remark;
    }

    /**
     * @param string $remark
     * @return Promotion
     */
    public function setRemark(string $remark): Promotion
    {
        $this->remark = $remark;
        return $this;
    }


}