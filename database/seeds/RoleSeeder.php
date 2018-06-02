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
        $user->hierarchy = serialize([]);
        $user->priority = 2;
        $user->save();

        //Super admin
        $superAdminHierarchy[]=$user->role;
        $superAdmin = new App\Role();
        $superAdmin->name="Super Administrator";
        $superAdmin->role=\App\Role::SUPER_ADMIN;
        $superAdmin->priority=1;
        $superAdmin->hierarchy=serialize($superAdminHierarchy);
        $superAdmin->save();


    }
}
