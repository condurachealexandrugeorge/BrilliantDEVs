<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_client = Role::where('name','Client')->first();
        $role_developer = Role::where('name','Developer')->first();
        $role_manager = Role::where('name','Manager')->first();
        $role_admin = Role::where('name','Admin')->first();

        $client = new User();
        $client->name = 'Client';
        $client->email = 'client@brilliantdevs.ro';
        $client->password = bcrypt('client');
        $client->save();
        $client->roles()->attach($role_client);

        $developer = new User();
        $developer->name = 'Developer';
        $developer->email = 'developer@brilliantdevs.ro';
        $developer->password = bcrypt('developer');
        $developer->save();
        $developer->roles()->attach($role_developer);

        $manager = new User();
        $manager->name = 'Manager';
        $manager->email = 'manager@brilliantdevs.ro';
        $manager->password = bcrypt('manager');
        $manager->save();
        $manager->roles()->attach($role_manager);

        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@brilliantdevs.ro';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->roles()->attach($role_admin);

    }
}
