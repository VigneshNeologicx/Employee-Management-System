<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Employee;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class EmployeeAuthController extends Controller
{

     public function __construct() {
    //     $this->middleware('guest:employee');
    //     $this->middleware('auth:employee');
    //     $this->middleware('auth:web');
    //     $this->middleware('guest:web');
    //     $this->middleware('auth');
      }

    public function login_emp()
    {
        return view('employee.login');
    }

 public function login_verify_emp(Request $request)
 {

  if((!Auth::guard('web')->user())&&(!Auth::guard('employee')->user())){

    if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {

        // Authentication passed...
        return redirect()->intended('/dashboard');
    }
    elseif(Auth::guard('employee')->attempt(['email' => $request->email, 'password' => $request->password])){

        return redirect()->route('dashboard.emp');
    }
 }
 else
 {
    if(Auth::guard('web')->user())
    {
        return "Some Admin User Logged in, So Please Logout that user and Try again";
    }
    else
    {
        return "Some User Logged in, So Please Logout that user and Try again";
    }
 }


 }

 public function logout_emp(){

    if(Auth::guard('employee')->user()){

    Auth::guard('employee')->logout();

    return redirect('/login');
   }
   return redirect()->route('login.emp');
}


public function register_emp(){

  return view('employee.register');
}
public function register_submit_emp(Request $request)
{

$validator = Validator::make($request->all(),[
    'name' => 'required|min:4',
    'email'=> 'required|unique:employees|email ',
    'password' => 'required|min:8',
    'password_confirmation' => 'required|min:8|same:password',
    'password_confirmation.same' => 'Password Confirmation should match the Password',
]);

if ($validator->fails()) {
    return back()->withInput()->withErrors($validator->messages());
}
else{
 $data = new Employee;
 $data->name = $request->name;
 $data->email = $request->email;
 $data->password = Hash::make($request->password);
 $data->save();

 return back()->with("Successfully Registered ");
}

}


}
