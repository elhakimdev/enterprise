<?php

namespace App\Models\Locations;

use Illuminate\Database\Eloquent\Model;

class Regencie extends Model
{
    // Regencie Has One Province
    public function province(){
        return $this->belongsTo('App\Models\Locations\Province');
    }
}
