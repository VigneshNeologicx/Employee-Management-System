<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class AdminController extends Controller
{

    public function Index()
    {
        return view('admin.login');
    }

    public function Dashboard(){
        if(Auth::guard('admin')->user()){
        return view('admin.admin-master');
        }
        else{
            return redirect()->route('login_form');
        }
    }

    public function Login(Request $request){
       if(!Auth::guard('admin')->user())
       {
        $check = $request->all();
        if(Auth::guard('admin')->attempt(['email' =>$check['email'],'password' => $check['password']])){
            return redirect()->route('admin.dashboard')->with('error','Admin Login successful');
        }
        else{
            return  back()->with('error','Invalid Email (or) Password');
        }
    }
    else {
        return  back()->with('error','User is Already Logged in ');
    }

}

public function Logout(Request $request)
{
    Auth::guard('admin')->logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/admin/login');
}

}
