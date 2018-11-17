<?php

use Faker\Generator as Faker;


//Countries
$factory->define(App\Country::class, function (Faker $faker) {
    $center = [
        'latitude'=> $faker->latitude,
        'longitude'=>$faker->longitude
    ];
    return [
        'name' => $faker->country,
        'code'=> $faker->countryCode,
        'zoom'=> 11,
        'phone_code'=>$faker->numberBetween(1,999),
        'center'=>json_encode($center),
        'continent_id'=> App\Continent::all()->random(1)->first()->id
    ];
});

