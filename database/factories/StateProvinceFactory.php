<?php

use Faker\Generator as Faker;

//Province_states
$factory->define(App\StateProvince::class, function (Faker $faker) {
    $center = [
        'latitude'=> $faker->latitude,
        'longitude'=>$faker->longitude
    ];

    return [
        'name' => $faker->name,
        'code'=> str_random(3),
        'zoom'=>rand(11,14),
        'center'=>json_encode($center),
        'country_id'=> App\Country::all()->random(1)->first()->id
    ];
});


