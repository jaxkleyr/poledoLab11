<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dependent extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'relationship',
        'employee_id',
    ];

    public function employee_dependent()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'employee_id');
    }
}
