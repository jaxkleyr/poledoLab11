<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [ 
        'country_name',
        'region_id',
    ];

    public function country_region(){
        return $this->belongsTo(Region::class, 'region_id', 'region_id');
    }

    public function country_location(){
        return $this->hasMany(Location::class, 'country_id', 'country_id');
    }
}
