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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function(){
    Auth::routes();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::namespace('App\Http\Controllers\Backend')->middleware(['auth'])->prefix('admin')->as('backend.')->group(function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard.index');

    Route::resource('roles',RolesController::class);

    Route::resource('admins',AdminsController::class);
});

Route::namespace('App\Http\Controllers\Frontend')->group(function(){

});
