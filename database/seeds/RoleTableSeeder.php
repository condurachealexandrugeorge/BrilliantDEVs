<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_client = new Role();
        $role_client->name = 'Client';
        $role_client->description = 'A normal Client';
        $role_client->save();

        $role_developer = new Role();
        $role_developer->name = 'Developer';
        $role_developer->description = 'A normal Developer';
        $role_developer->save();

        $role_manager = new Role();
        $role_manager->name = 'Manager';
        $role_manager->description = 'A normal Manager';
        $role_manager->save();

        $role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->description = 'A normal Admin';
        $role_admin->save();
    }
}
