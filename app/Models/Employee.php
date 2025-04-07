<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [ 
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'hire_date',
        'salary',
        'job_id',
        'department_id',
        'manager_id',
    ];

    public function employee_job(){
        return $this->belongsTo(Job::class, 'job_id', 'job_id');
    }

    public function employee_department(){
        return $this->belongsTo(Department::class, 'department_id', 'department_id');
    }

    public function employee_manager(){
        return $this->belongsTo(Employee::class, 'manager_id', 'employee_id');
    }

    public function manager_employee(){
        return $this->hasMany(Employee::class, 'manager_id', 'employee_id');
    }

    public function employee_dependent(){
        return $this->hasMany(Dependent::class, 'employee_id', 'employee_id');
    }
}
