<?php

use App\User;
use Illuminate\Database\Seeder;
use jeremykenedy\LaravelRoles\Models\Permission;
use jeremykenedy\LaravelRoles\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRole = Role::where('name', '=', 'User')->first();
        $adminRole = Role::where('name', '=', 'Admin')->first();
        $permissions = Permission::all();

        /*
         * Add Users
         *
         */
        if (User::where('email', '=', 'admin@admin.com')->first() === null) {
            $newUser = User::create([
                'name'     => 'Admin',
                'email'    => 'admin@admin.com',
                'password' => bcrypt('S4nt0s'),
            ]);

            $newUser->attachRole($adminRole);
            foreach ($permissions as $permission) {
                $newUser->attachPermission($permission);
            }
        }

        if (User::where('email', '=', 'user@user.com')->first() === null) {
            $newUser = User::create([
                'name'     => 'User',
                'email'    => 'user@user.com',
                'password' => bcrypt('S4nt0s'),
            ]);

            $newUser;
            $newUser->attachRole($userRole);
        }

        if (User::where('email', '=', 'richardportugal013@gmail.com')->first() === null) {
            $newUser = User::create([
                'name'     => 'Richard',
                'email'    => 'richardportugal013@gmail.com',
                'password' => bcrypt('123456789'),
            ]);

            $newUser->attachRole($adminRole);
            foreach ($permissions as $permission) {
                $newUser->attachPermission($permission);
            }
        }

        if (User::where('email', '=', 'hotel@user.com')->first() === null) {
            $newUser = User::create([
                'name'     => 'Hotel',
                'email'    => 'hotel@user.com',
                'password' => bcrypt('123456789'),
            ]);

            $newUser;
            $newUser->attachRole($userRole);
        }
    }
}
