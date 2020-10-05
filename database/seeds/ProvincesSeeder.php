<?php

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use App\Models\Locations\Province;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now();
        $provinces = file(database_path('seeds/locations/provinces.csv'));
        foreach ($provinces as $province) {
            $row = explode(';',$province);
            Province::insert([
                'id'=>$row[0],
                'province_code'=>$row[1],
                'province_name'=>str_replace(PHP_EOL,'',ucwords(strtolower($row[2]))),
                'created_at'=>$now,
                'updated_at'=>$now,
            ]);
        }
    }
}
