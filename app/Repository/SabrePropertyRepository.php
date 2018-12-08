<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 12/3/18
 * Time: 10:03 PM
 */

namespace App\Repository;


use Illuminate\Support\Facades\DB;

class SabrePropertyRepository
{

    /**
     * Return a list of properties withing the given radius, 5 miles default
     * @param float $latitude
     * @param int $longitude
     * @param float $radiusInMeters
     * @return static
     */
    public function getHotelCodeList($latitude=25.6956945,$longitude=-80.4502201,$radiusInMeters=500000,$onlyImages=false){

        //convert radius to KM (111.045 km per degree == 69 miles per degree)
        $radiusInKM = $radiusInMeters/1000;

        $bindings=[
            $latitude,
            $longitude,
            $latitude,

            $latitude,
            $radiusInKM,
            $latitude,
            $radiusInKM,

            $longitude,
            $radiusInKM,
            $latitude,
            $longitude,
            $radiusInKM,
            $latitude,

        ];

        $propertyCodes = DB::connection('sabre')->table('property as prop')
            ->select([
                'prop.code',
                 'pic.url',
                 DB::raw('(111.045* DEGREES(ACOS(COS(RADIANS(?))
                             * COS(RADIANS(prop.latitude))
                             * COS(RADIANS(?) - RADIANS(prop.longitude))
                             + SIN(RADIANS(?))
                             * SIN(RADIANS(prop.latitude))))) as distance_in_km')

            ])
            ->leftJoin('picture as pic','pic.property_code','=','prop.code')
            ->whereRaw('prop.latitude BETWEEN ? - (? / 111.045) AND ?  + (? / 111.045)')
            ->whereRaw('prop.longitude BETWEEN ? - (? / (111.045 * COS(RADIANS(?)))) AND ? + (? / (111.045 * COS(RADIANS(?))))')
            ->setBindings($bindings)
            ->orderBy('distance_in_km','ASC')
            ->limit(100);

        if($onlyImages){
            $propertyCodes->whereNotNull('url');
        }
        return $propertyCodes->get()->pluck('url','code')->toArray();
    }
}