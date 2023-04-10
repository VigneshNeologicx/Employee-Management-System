<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $primaryKey= "employee_id";
    protected $fillable = [
        'name',
        'email',
        'phone'
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }
    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);
    }
    public function setPhoneAttribute($value)
    {
        $this->attributes['phone'] = '+91'.$value;
    }

    public function department()
    {
        return $this->hasOne(Department::class,'department_id','dept_id');
    }

    public function role()
    {
        return $this->hasOne(Role::class,'','');
    }
    public function position()
    {
        return $this->hasOne(Position::class,'','');
    }
}
