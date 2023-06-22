<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeAuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DeptController;
use App\Http\Controllers\AdminDeptController;
use App\Http\Controllers\AdminEmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/admin')->group(function(){

    // ********************* Department Routes ************************* /
Route::get('/dept/list',[AdminDeptController::class,'index'])->name('admin.dept.list');
Route::get('/dept/edit/{id}',[AdminDeptController::class,'edit'])->name('admin.dept.edit');
Route::post('/dept/add',[AdminDeptController::class,'add'])->name('admin.dept.add');
Route::get('/dept/delete/{id}',[AdminDeptController::class,'destroy'])->name('admin.dept.delete');
// ********************* End Department Routes ************************* /
Route::get('/user-logout',[AdminDeptController::class,'logout'])->name('admin.user.logout');


// Admin Employee Controller Routes
Route::get('/employee/add',[AdminEmployeeController::class,'show_add_staff'])->name('admin.add.staff');
Route::post('/employee/add_staff',[AdminEmployeeController::class,'add_emp'])->name('admin.emp.add');
Route::post('/employee/insert_role',[AdminEmployeeController::class,'insert_role'])->name('admin.insert.role');
Route::post('/employee/insert_position',[AdminEmployeeController::class,'insert_position'])->name('admin.insert.position');
Route::get('/employee/edit/{id}',[AdminEmployeeController::class,'edit'])->name('admin.emp.edit');
Route::get('/employee/delete/{id}',[AdminEmployeeController::class,'destroy'])->name('admin.emp.delete');
Route::get('/employee/create_role_pos',[AdminEmployeeController::class,'add_role_pos'])->name('admin.role.pos');
Route::post('/employee/update/{id}',[AdminEmployeeController::class,'update'])->name('admin.emp.update');
Route::get('/delete/role/{id}',[AdminEmployeeController::class,'role_delete'])->name('admin.role.del');
Route::get('/delete/position/{id}',[AdminEmployeeController::class,'position_delete'])->name('admin.position.del');
Route::get('/edit/role/{id}',[AdminEmployeeController::class,'role_edit'])->name('admin.role.edit');
Route::get('/edit/position/{id}',[AdminEmployeeController::class,'position_edit'])->name('admin.position.edit');
Route::post('/update/role/{id}',[AdminEmployeeController::class,'role_update'])->name('admin.role.update');
Route::post('/update/position/{id}',[AdminEmployeeController::class,'position_update'])->name('admin.position.update');

});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth:web'])->name('dashboard');

require __DIR__.'/auth.php';


// ********************* Employee Routes ************************* /
Route::prefix('employee')->middleware('auth:employee')->group(function (){

    // login, register, logout
    Route::get('/logout',[EmployeeAuthController::class,'logout_emp'])->name('logout.emp');
    Route::get('/leave-list',[EmployeeController::class,'leave-list'])->name('leave.list.emp');
    Route::post('/leave-request',[EmployeeController::class,'leave-request'])->name('leave.request.emp');
    Route::post('/show-profile',[EmployeeController::class,'show_profile'])->name('show.profile.emp');
    Route::get('/show-profile-view',[EmployeeController::class,'show_profile_view'])->name('show.profile.emp.view');

    // Employee controller routes
    Route::get('/dashboard',[EmployeeController::class,'Dashboard'])->name('dashboard.emp');
});

    Route::get('/employee/login',[EmployeeAuthController::class,'login_emp'])->name('login.emp');
    Route::post('/employee/login',[EmployeeAuthController::class,'login_verify_emp'])->name('login.verify.emp');
    Route::get('/employee/register',[EmployeeAuthController::class,'register_emp'])->name('register.emp');
    Route::post('/employee/register',[EmployeeAuthController::class,'register_submit_emp'])->name('register.submit.emp');

// ********************* End Employee Routes ************************* /


// ********************* Department Routes ************************* /

Route::get('/dept/list',[DeptController::class,'index'])->name('dept.list');
Route::get('/dept/edit/{id}',[DeptController::class,'edit'])->name('dept.edit');
Route::post('/dept/add',[DeptController::class,'add'])->name('dept.add');
Route::get('/dept/delete/{id}',[DeptController::class,'destroy'])->name('dept.delete');

// ********************* End Department Routes ************************* /

