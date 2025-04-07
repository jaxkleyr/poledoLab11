<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [ 
        'street_address',
        'postal_code',
        'city',
        'state_province',
        'country_id',
    ];

    public function country_location(){
        return $this->belongsTo(Country::class, 'country_id', 'country_id');
    }

    public function location_department()
    {
        return $this->hasMany(Department::class, 'department_id', 'department_id');
    }
}
