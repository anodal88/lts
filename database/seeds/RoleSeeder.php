<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //ROLE USER
        $user = new App\Role();
        $user->name = "Role User";
        $user->role = \App\Role::ROLE_USER;
        $user->security_level = 10;
        $user->save();

        //Super admin
        $superAdmin = new App\Role();
        $superAdmin->name="Super Administrator";
        $superAdmin->role=\App\Role::ROLE_SUPER_ADMIN;
        $superAdmin->security_level=0;
        $superAdmin->save();


    }
}
