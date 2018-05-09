<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/23/18
 * Time: 11:55 PM
 */

namespace ladonlabs\hotelbeds;


trait SerializationTrait
{
    public function jsonSerialize()
    {
        $result = [];
        $attributes = get_object_vars($this);
        foreach ($attributes as $key => $value) {
            if (!is_null($value)) {
                if ($value instanceof \DateTime) {
                    $value = $value->format("Y-m-d");
                }
                $result[$key] = $value;
            }
        }
        return $result;
    }
}