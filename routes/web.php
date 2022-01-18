<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RecuirtmentController;

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

Route::get('/', function(){
    return view('recuirtment');
});

Route::post('/save_recuirtment', [RecuirtmentController::class, 'saveRecuirtment']);

Route::get('/admin', [AuthController::class, 'loginForm']);
Route::post('/cek_login', [AuthController::class, 'authenticate']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => 'check'], function(){
    Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('/view-pdf/{id}', [DashboardController::class, 'viewFile']);
    Route::get('/all-pelamar',[DashboardController::class, 'data_all']);
    Route::get('/pelamar-diterima',[DashboardController::class, 'data_diterima']);
    Route::get('pelamar-ditolak',[DashboardController::class, 'data_ditolak']);
});