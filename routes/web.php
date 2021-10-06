<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\laravelusercontroller;
use App\Http\Controllers\logincontroller;
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

Route::get('home', function () {
    return view('welcome');
});
Route::post("user",[Usercontroller::class,'getdata']);
Route::post("registration", [laravelusercontroller::class,'getdata']);
Route::post("login", [logincontroller::class,'fetchdata']);
//Route::view("hello","hello");
//Route::view("first","firstchange");
Route::view("/","index");
Route::view("registration","registration");
Route::view("login","login");

