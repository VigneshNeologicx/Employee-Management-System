<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;

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

Route::get('/', function () {
    return view('layouts.master-home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
         return view('admin.index');
    })->name('dashboard');
});


Route::get('/home', function () {
    echo "Hi this is Home Page";
 });


Route::get('/about', function () {
   return view('about');
})->middleware('check')->name('abt');

Route::get('/contact',[ContactController::class,'index'])->name('con');


// Category Controller Routes

Route::get('/category/all',[CategoryController::class,'AllCat'])->name('all.category');
Route::post('/category/add',[CategoryController::class,'AddCat'])->name('store.category');

Route::get('/category/edit/{id}',[CategoryController::class,'Edit']);
Route::post('/category/update/{id}',[CategoryController::class,'Update']);
Route::get('/softDelete/category/{id}',[CategoryController::class,'SoftDelete']);
Route::get('/category/restore/{id}',[CategoryController::class,'Restore']);
Route::get('/pdelete/category/{id}',[CategoryController::class,'PDelete']);

// Brand Controller Routes

Route::get('/brand/all',[BrandController::class,'AllBrand'])->name('all.brand');
Route::post('/brand/add',[BrandController::class,'AddBrand'])->name('store.brand');
Route::get('/brand/edit/{id}',[BrandController::class,'Edit']);
Route::post('/brand/update/{id}',[BrandController::class,'Update']);
Route::get('/brand/delete/{id}',[BrandController::class,'Delete']);

// Multi pic Routes

Route::get('/multi/image',[BrandController::class,'Multipic'])->name('multi.image');
Route::post('/multi/add',[BrandController::class,'StoreImg'])->name('store.image');


// Authentication Routes

Route::get('/user/logout',[BrandController::class,'Logout'])->name('user.logout');

//
