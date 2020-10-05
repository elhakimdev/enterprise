<?php
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use App\Models\Locations\Village;

class VillagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now();
        $villages = file(database_path('seeds/locations/villages.csv'));
        foreach ($villages as $village) {
            $row = explode(';',$village);
            $pre = substr($row[2],0,4);
            $mid = substr($row[2],4,2);
            $last = substr($row[2],6,4);
            $village_code = $pre . " - " . $mid . " - " . $last;
            Village::insert([
                'id'=>intval($row[0]),
                'district_id'=>$row[1],
                'village_code'=>$village_code,
                'village_name'=>str_replace(PHP_EOL,'',ucwords(strtolower($row[3]))),
                'created_at'=>$now,
                'updated_at'=>$now,
            ]);
        }
    }
}
