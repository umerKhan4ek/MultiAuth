<?php

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

Route::prefix('admin')->namespace('App\Http\Controllers\Auth\Admin')->group(function(){
    Route::get('login', 'LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout')->name('admin.logout');

});

Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->group(function(){

    Route::get('dashboard', 'DashboardController@index');
});

Route::prefix('user/')->namespace('App\Http\Controllers\User')->group(function(){

    Route::get('dashboard', 'DashboardController@index');
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
