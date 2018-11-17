<?php

use Faker\Generator as Faker;

//Continents
$factory->define(App\Continent::class, function (Faker $faker) {
    return [
        'name' => $faker->name
    ];
});

