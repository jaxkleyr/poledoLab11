<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = [ 
        'region_name',
    ];

    public function country_region(){
        return $this->hasMany(Country::class, 'region_id', 'region_id');
    }
}
