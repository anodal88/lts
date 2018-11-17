<?php

use Faker\Generator as Faker;
use database\types\CompanyType;

$factory->define(App\City::class, function (Faker $faker) {
    $center = [
        'latitude'=> $faker->latitude,
        'longitude'=>$faker->longitude
    ];
    return [
        'name' => $faker->city,
        'code'=> str_random(3),
        'zoom'=> rand(11,15),
        'picture'=>$faker->imageUrl(),
        'description'=>$faker->realText(),
        'center'=>json_encode($center),
        'state_province_id'=> App\StateProvince::all()->random(1)->first()->id
    ];
});

