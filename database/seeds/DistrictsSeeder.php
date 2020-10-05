<?php

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use App\Models\Locations\District;

class DistrictsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now();
        $districts = file(database_path('seeds/locations/districts.csv'));
        foreach ($districts as $district) {
            $row = explode(';',$district);
            $pre = substr($row[2],0,2);
            $mid = substr($row[2],2,2);
            $last = substr($row[2],4,2);
            $district_code = $pre . " - " . $mid . " - " . $last;
            District::insert([
                'id'=>intval($row[0]),
                'regencie_id'=>$row[1],
                'district_code'=>$district_code,
                'district_name'=>str_replace(PHP_EOL,'',ucwords(strtolower($row[3]))),
                'created_at'=>$now,
                'updated_at'=>$now,
            ]);
        }
    }
}
