<?php

namespace App\Models\Locations;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    // Province Has Many Regencies
    public function regencies(){
        return $this->hasMany('App\Models\Locations\Regencie','province_id');
    }
    public function districts()
    {
        // return $this->hasMany('App\Models\Locations\District', 'district_id');
    }
}
