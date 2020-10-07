<?php

namespace App\Models\Locations;
use Illuminate\Database\Eloquent\Model;

class Regencie extends Model
{
    /**
     * Inverse One To One Relationship Function 
     *
     * A Regencie Has One Province, Defined that a Province is Have a One To One relationship beetwen Regencies.
     *
     * @return \App\Models\Locations\Province
     **/
    public function province(){
        return $this->belongsTo('App\Models\Locations\Province');
    }
    /**
     * One To Many Relationship Function 
     *
     * A Regencie Has Many Districts, Defined that a Regencie is Have a One To Many relationship beetwen Districts.
     *
     * @return \App\Models\Locations\Regencie, String $foreignKey
     **/
    public function districts(){
        return $this->hasMany('App\Models\Locations\Ditrict','district_id');
    }
}
