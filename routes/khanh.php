<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/login',[LoginController::class, 'login_user']);
Route::get('/dang-nhap',[LoginController::class, 'login_user']);
Route::get('/dang-ky',[LoginController::class, 'signUp']);
Route::post('/login-customer',[LoginController::class, 'login_customer']);
Route::post('/add-customer',[LoginController::class, 'add_customer']);
