<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\PlanController;

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
Route::resource('materials','MaterialController');
Route::resource('plans','PlanController');
//Route::resource('/plans', PlanController::class);
//Route::resource('/material', MaterialController::class);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/gantt', 'HomeController@index')->name('gantt');
