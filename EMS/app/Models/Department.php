<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Department extends Model
{
    use HasFactory;

    public $table= 'departments';

    protected $fillable=[
        'department_name'
    ];
    protected $primaryKey= "department_id";

    public function getEmployee(){
        return $this->hasMany(Employee::class);
    }

    public function setDepartmentNameAttribute($value)
    {
        $this->attributes['department_name'] = ucwords($value);
    }

}
