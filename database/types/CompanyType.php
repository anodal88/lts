<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 5/28/18
 * Time: 12:29 AM
 */
namespace database\types;

class CompanyType extends AbstractType
{
    const TRAVEL_AGENCY="TRAVEL_AGENCY";
    const HOTEL = "HOTEL";

    public static function choices()
    {
        return [
            self::TRAVEL_AGENCY=>self::TRAVEL_AGENCY,
            self::HOTEL=>self::HOTEL
        ];
    }

    public static function getDefaultValue()
    {
        return self::TRAVEL_AGENCY;
    }
}