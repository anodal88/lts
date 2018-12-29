<?php
/**
 * Created by PhpStorm.
 * User: antonionodal
 * Date: 2018-12-17
 * Time: 21:48
 */

namespace database\types;


class ModeType extends AbstractType
{

    const MODE_DEV="DEV";
    const MODE_PROD="PROD";

    public static function choices()
    {
       return [
           self::MODE_DEV=>self::MODE_DEV,
           self::MODE_PROD=>self::MODE_PROD
       ];
    }

    public static function getDefaultValue()
    {
        return self::MODE_DEV;
    }
}