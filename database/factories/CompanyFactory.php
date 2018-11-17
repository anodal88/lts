<?php

use Faker\Generator as Faker;
use database\types\CompanyType;

$factory->define(App\Company::class, function (Faker $faker) {
    $company =  [
        'name' => $faker->company,
        'sub_domain' => $faker->domainWord,
        'logo' => $faker->imageUrl(150,80),
        'iata' => str_random(6),
        'business_identification_number' => $faker->bankAccountNumber,
        'phone'=>$faker->phoneNumber,
        'fax'=>$faker->phoneNumber,
        'fax'=>$faker->phoneNumber,
        'contact_email'=>$faker->companyEmail,
        'type'=> $faker->randomElement(CompanyType::choices()),
        'address'=> $faker->streetAddress,
        'active'=>true,
        'city_id'=>App\City::all()->random(1)->first()->id,
        'state_id'=>App\StateProvince::all()->random(1)->first()->id,
        'country_id'=> App\Country::all()->random(1)->first()->id,
        'zip'=>$faker->postcode,
        'latitude'=>$faker->latitude,
        'longitude'=>$faker->longitude
    ];

    return $company;
});

