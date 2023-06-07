<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    protected $fillable=[
        'start-date',
        'end-date',
        'No of Days Leaves',
        'status',
        'emp_id',
        'comments'
    ];
}
