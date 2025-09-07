<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->controller(AreaController::class)->group(function () {
    Route::get('/areas', 'index')->name('areas.index');
    Route::get('/areas/create', 'create')->name('areas.create');
    Route::get('/areas/{area}',  'show')->name('areas.show');
    Route::post('/areas', 'store')->name('areas.store');
    Route::delete('/area/{area}', 'destroy')->name('areas.delete');
});

Route::middleware('guest')->controller(AuthController::class)->group(function(){
    Route::get('/register', 'showRegister')->name('show.register');
    Route::get('/login', 'showLogin')->name('show.login');
    Route::post('/register', 'register')->name('register');
    Route::post('login', 'login')->name('login');
});
