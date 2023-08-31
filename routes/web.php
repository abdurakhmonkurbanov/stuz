<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdressController;
use App\Http\Controllers\CourseController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[PageController::class,'index'])->name('index');
Route::resource('/courses', CourseController::class);

////  Login Registration
Route::get('login',[UserController::class,'login_form'])->name('login_form');
Route::post('login',[UserController::class,'login'])->name('login');
Route::get('logout',[UserController::class,'logout'])->name('logout');

Route::get('registration',[UserController::class,'reg_form'])->name('reg_form');
Route::post('registration',[UserController::class,'registration'])->name('registration');

Route::post('getRegions',[AdressController::class,'getRegions'])->name('getRegions');
Route::post('getShools',[AdressController::class,'getSchools'])->name('getSchools');

