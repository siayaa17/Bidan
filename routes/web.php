<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BidanController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\JanjitemuController;
use App\Http\Controllers\RekamedisController;
use App\Http\Controllers\PasienhamilController;
use App\Http\Controllers\PasienkbController;

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

//Route::get('/', function () {
//return view('welcome');
//});

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/user', [UserController::class, 'home']);
Route::get('/bidan', [UserController::class, 'home']);
Route::get('/pasien', [UserController::class, 'home']);
Route::get('/janjitemu', [UserController::class, 'home']);
Route::get('/rekamedis', [UserController::class, 'home']);
Route::get('/pasienhamil', [UserController::class, 'home']);
Route::get('/pasienkb', [UserController::class, 'home']);
Route::POST('/prosesLogin', [LoginController::class, 'postlogin']);