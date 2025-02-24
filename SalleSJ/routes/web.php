<?php

use App\Http\Controllers\authentificationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalleController;
use App\Models\Role;

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

Route::get('/admin/salle',[SalleController::class,'ShowSallesforAdmin']);

Route::get('/client/salle',[SalleController::class,'ShowSallesforClient']);

Route::get('/admin/users',[SalleController::class,'ShowUsersForClient']);

Route::get('/salle/update/form',[SalleController::class,'showUpdateForm']);

Route::get('/salle/update',[SalleController::class,'updateSalle']);

Route::get('/salle/add',[SalleController::class,'CreateSalle']);

Route::get('/salle/delete',[SalleController::class,'DeleteSalle']);

Route::get('/salle/details',[SalleController::class, 'ShowRoomDetails']);

