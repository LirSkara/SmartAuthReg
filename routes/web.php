<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [MainController::class, 'welcome']);
Route::get('/check_tel/{tel}', [AuthController::class, 'check_tel']);


Route::post('/login', [AuthController::class, 'login_process']);
Route::post('/register', [AuthController::class, 'register_process']);