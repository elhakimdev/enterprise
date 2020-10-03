<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name'=>'Administrator',
            'email'=>'administrator@role.test',
            'password'=>bcrypt('12345678')

        ]);

        $admin->assignRole('administrator');

        $user = User::create([
            'name'=>'manajer',
            'email'=>'manajer@role.test',
            'password'=>bcrypt('12345678')

        ]);
        
        $admin->assignRole('manager');

        $admin = User::create([
            'name'=>'cashier',
            'email'=>'cashiher@role.test',
            'password'=>bcrypt('12345678')

        ]);

        $admin->assignRole('cashier');
    }
}
