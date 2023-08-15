<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    route::controller(App\Http\Controllers\ClientController::class)->group(function () {
        Route::get('/client', 'index')->name('client.index');
        Route::get('/client/create', 'create')->name('client.create');
        Route::post('/client', 'store')->name('client.store');
        Route::get('/client/{client}/edit', 'edit')->name('client.edit');
        Route::put('/client/{client}', 'update')->name('client.update');
        Route::delete('/client/{client}', 'destroy')->name('client.destroy');
    });

    Route::resource('user', \App\Http\Controllers\UserController::class);
});
