<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\DashboardController;
Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::get('/',[DashboardController::class,'index'])->name('dashboard');


use App\Http\Controllers\StatesController;
Route::resource('state', StatesController::class,['except' => ['show','edit','update'] ]);

use App\Http\Controllers\CitiesController;
Route::resource('city', CitiesController::class);

use App\Http\Controllers\CampsController;
Route::resource('camp', CampsController::class);

use App\Http\Controllers\BloodGroupsController;
Route::resource('blood', BloodGroupsController::class,['except' => ['destroy'] ]);

use App\Http\Controllers\DonorRegistrationsController;
Route::resource('donor', DonorRegistrationsController::class);