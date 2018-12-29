<?php
/**
 * Created by PhpStorm.
 * User: antonionodal
 * Date: 2018-12-17
 * Time: 21:50
 */

namespace database\types;


abstract class AbstractType
{

    /**
     * @return array
     * @throws \ReflectionException
     */
    public abstract static function choices();

    public abstract static function getDefaultValue();

}