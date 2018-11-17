<?php

use Illuminate\Database\Seeder;

class InitialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Continent::class, 5)->create();
        factory(App\Country::class, 5)->create();
        factory(App\StateProvince::class, 5)->create();
        factory(App\City::class, 5)->create();

    }
}
