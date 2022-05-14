<?php

use App\Http\Controllers\AdminCitizensController;
use App\Http\Controllers\AdminLgasController;
use App\Http\Controllers\AdminStatesController;
use App\Http\Controllers\AdminUsersController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('admin/users', AdminUsersController::class);
Route::resource('admin/states', AdminStatesController::class);
Route::resource('admin/lga', AdminLgasController::class);
Route::resource('admin/citizen', AdminCitizensController::class);

