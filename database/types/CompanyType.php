<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 5/28/18
 * Time: 12:29 AM
 */
namespace database\types;

class CompanyType
{
    const TRAVEL_AGENCY="TRAVEL_AGENCY";
    const HOTEL = "HOTEL";

    /**
     * @return array
     * @throws \ReflectionException
     */
    public static function choices(){
        return (new \ReflectionClass(CompanyType::class))->getConstants();
    }
}