<?php

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use App\Models\Locations\Regencie;

class RegenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now();
        $regencies = file(database_path('seeds/locations/regencies.csv'));
        foreach ($regencies as $regencie) {
            $row = explode(';',$regencie);
            Regencie::insert([
                'id'=>$row[0],
                'province_id'=>$row[1],
                'regencie_code'=>$row[2],
                'regencie_name'=>str_replace(PHP_EOL,'',ucwords(strtolower($row[3]))),
                'created_at'=>$now,
                'updated_at'=>$now,
            ]);
        }
    }
}
