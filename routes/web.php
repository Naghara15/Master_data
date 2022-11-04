<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pegawaicontroller;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ordercontroller;
use App\Http\Controllers\orderlistcontroller;

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
    return view('welcome');
});

Route::resource('pegawai', pegawaicontroller::class);
Route::resource('order', ordercontroller::class);
Route::resource('orderlist', orderlistcontroller::class);
Route::get('/main', [MainController::class, 'index']);
Route::post('/checklogin', [MainController::class, 'checklogin']);
Route::get('/home', [MainController::class, 'home']);
Route::get('/logout', [MainController::class, 'logout']);
