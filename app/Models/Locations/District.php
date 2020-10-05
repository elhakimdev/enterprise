<?php

namespace App\Models\Locations;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    // District Has One Regencie
    public function regencie(){
        return $this->belongsTo('App\Models\Locations\Regencie');
    }
    public function villages(){
        return $this->hasMany('App\Models\Locations\Village');
    }
}
