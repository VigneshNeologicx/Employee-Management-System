<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;
use App\Models\Attendence;
use App\Models\Department;
use App\Models\Role;
use App\Models\Position;
use Auth;

class AttendenceController extends Controller
{

   public function index(){

 return view('admin.employee.attendence');
   }


}
