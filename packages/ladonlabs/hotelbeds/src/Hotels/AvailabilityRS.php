<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 4/5/18
 * Time: 9:03 PM
 */

namespace ladonlabs\hotelbeds\Hotels;

/**
 * Class AvailabilityRS
 * @package ladonlabs\hotelbeds\Hotels
 */
class AvailabilityRS
{

    /**
     * @var AuditData
     */
    private $auditData;

    /**
     * @var AvailableHotel[]
     */
    private $hotels;

    /**
     * @return AuditData
     */
    public function getAuditData(): AuditData
    {
        return $this->auditData;
    }

    /**
     * @param AuditData $auditData
     * @return AvailabilityRS
     */
    public function setAuditData(AuditData $auditData): AvailabilityRS
    {
        $this->auditData = $auditData;
        return $this;
    }

    /**
     * @return AvailableHotel[]
     */
    public function getHotels(): array
    {
        return $this->hotels;
    }

    /**
     * @param AvailableHotel[] $hotels
     * @return AvailabilityRS
     */
    public function setHotels(array $hotels): AvailabilityRS
    {
        $this->hotels = $hotels;
        return $this;
    }

}