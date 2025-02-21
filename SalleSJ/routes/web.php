<?php

use App\Http\Controllers\authentificationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalleController;


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
    return view('Dashboard');
});


Route::get('/login', function () {
    return view('Login');
});
Route::get('/auth/login',[authentificationController::class,'login']);


Route::get('/Register', function () {
    return view('Register');
});
Route::get('/auth/Register',[authentificationController::class,'Register']);

Route::get('/Client/Dashboard',[SalleController::class,'ShowSalles']);

