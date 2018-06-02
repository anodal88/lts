<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var  \Illuminate\Database\Eloquent\Collection $roles */
        $roles = \App\Role::all();

        factory(App\User::class, 50)->create()
            ->each(function ($u) use ($roles) {
                $roleUser = $roles->where('role', \App\Role::ROLE_USER)->first();
                $u->roles()->save($roleUser);
            });


        $default = new \App\User();
        $default->name = "Antonio Nodal";
        $default->email = "antonio.nodal88@gmail.com";
        $default->password = bcrypt("123456");
        $default->remember_token = str_random(10);
        $default->company_id = App\Company::all()->random(1)->first()->id;

        $default->save();
        $default->roles()->saveMany($roles);

    }
}
