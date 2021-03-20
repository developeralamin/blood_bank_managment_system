<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StatesController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\CampsController;
use App\Http\Controllers\BloodGroupsController;
use App\Http\Controllers\DonorRegistrationsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdvertismentsController;


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


Route::get('dashboard',[DashboardController::class,'index']);
Route::get('/',[DashboardController::class,'index']);

Route::resource('state', StatesController::class,['except' => ['show','edit','update'] ]);

Route::resource('city', CitiesController::class);

Route::resource('camp', CampsController::class);

Route::resource('blood', BloodGroupsController::class,['except' => ['destroy'] ]);

Route::resource('donor', DonorRegistrationsController::class);

Route::resource('news', NewsController::class);

Route::resource('advertisment', AdvertismentsController::class);