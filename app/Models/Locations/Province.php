<?php
namespace App\Models\Locations;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Province
 * 
 * This is Class handler for Provinces table, This Class was extended from illuminate\Database\Eloquent\Model, all method and attribute was provided by illuminate\Database\Eloquent\Model class 
 */
class Province extends Model
{
    /**
     * One To Many Relationship Function 
     *
     * A Province Has Many Regencies, Defined that a Province is Have a One To Many relationship beetwen Regencies.
     *
     * @return \App\Models\Locations\Regencie, String $foreignKey
     **/
    public function regencies(){
        return $this->hasMany('App\Models\Locations\Regencie','province_id');
    }
}
