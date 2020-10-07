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
        $superadmin = User::create([
            'name'=>'Administrator',
            'email'=>'administrator@role.test',
            'password'=>bcrypt('admin')
        ]);
        $superadmin->assignRole('super-admin');
    }
}
