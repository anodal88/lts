<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/25/18
 * Time: 10:19 PM
 */

namespace ladonlabs\hotelbeds\Hotels\Content;

/**
 * Class ContentResponse
 * @package ladonlabs\hotelbeds\Hotels\Content
 */
class ContentResponse
{

    /**
     * @var integer
     */
    private $from;

    /**
     * @var integer
     */
    private $to;

    /**
     * @var integer
     */
    private $total;

    /**
     * @var AuditData
     */
    private $auditData;

    /**
     * @var array
     */
    private $hotels=[];

    /**
     * @return int
     */
    public function getFrom(): int
    {
        return $this->from;
    }

    /**
     * @param int $from
     * @return ContentResponse
     */
    public function setFrom(int $from): ContentResponse
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
     * @return ContentResponse
     */
    public function setTo(int $to): ContentResponse
    {
        $this->to = $to;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @param int $total
     * @return ContentResponse
     */
    public function setTotal(int $total): ContentResponse
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return AuditData
     */
    public function getAuditData(): AuditData
    {
        return $this->auditData;
    }

    /**
     * @param AuditData $auditData
     * @return ContentResponse
     */
    public function setAuditData(AuditData $auditData): ContentResponse
    {
        $this->auditData = $auditData;
        return $this;
    }

    /**
     * @return array
     */
    public function getHotels(): array
    {
        return $this->hotels;
    }

    /**
     * @param array $hotels
     * @return ContentResponse
     */
    public function setHotels(array $hotels): ContentResponse
    {
        $this->hotels = $hotels;
        return $this;
    }


}