<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        // $this->call(ProvincesSeeder::class);
        // $this->call(RegenciesSeeder::class);
        // $this->call(DistrictsSeeder::class);
        // $this->call(VillagesSeeder::class);
    }
}
