<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [ 
        'department_name',
        'location_id',
    ];

    public function department_location(){
        return $this->belongsTo(Region::class, 'location_id', 'location_id');
    }

    public function employee_department(){
        return $this->hasMany(Employee::class, 'department_id', 'department_id');
    }
}
