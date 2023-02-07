<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/

Route::view('register','auth.registration')->middleware('guest');
Route::post('RegistrationAction',[RegisterController::class,'store']);
Route::get('home',[HomeController::class,'index'])->middleware('auth');


Route::view('login','auth.login')->middleware('guest')->name('login');

Route::post('LoginAction',[LoginController::class,'authenticate']);
Route::get('logout',[LoginController::class,'logout']);