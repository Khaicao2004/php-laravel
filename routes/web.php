<?php

use App\Http\Controllers\Ajax\LocationController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Middleware\AuthenticateMiddleware;
use App\Http\Middleware\LoginMiddleware;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
/** BACKEND ROUTES */
Route::get('dashboard/index',[DashboardController::class, 'index'])->name('dashboard.index')
->middleware('admin');

/** USER ROUTES */
Route::group(['prefix' => 'user'], function(){
    Route::get('index',[UserController::class, 'index'])->name('user.index')
    ->middleware('admin');
    Route::get('create',[UserController::class, 'create'])->name('user.create')
    ->middleware('admin');
});

/**AJAX */
Route::get('ajax/location/getLocation',[LocationController::class, 'getLocation'])->name('ajax.location.index')
->middleware('admin');


Route::get('admin',[AuthController::class, 'index'])->name('auth.admin')->middleware('login');
Route::get('logout',[AuthController::class, 'logout'])->name('auth.logout');
Route::post('login',[AuthController::class, 'login'])->name('auth.login');