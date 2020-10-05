<?php

namespace App\Models\Locations;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    public function district(){
        return $this->belongsTo('App\Models\Locations\District');
    }
}
