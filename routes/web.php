<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/areas', [AreaController::class, 'index'])->name('areas.index');

Route::get('/areas/create', [AreaController::class, 'create'])->name('areas.create');

Route::get('/areas/{area}', [AreaController::class, 'show'])->name('areas.show');

Route::post('/areas',[AreaController::class,'store'])->name('areas.store');

Route::delete('/area/{area}',[AreaController::class,'destroy'])-> name('areas.delete');

Route::get('/register',[AuthController::class,'showRegister'])->name('show.register');

Route::get('/login',[AuthController::class,'showLogin'])->name('show.login');

Route::post('/register',[AuthController::class,'register'])->name('register');

Route::post('login',[AuthController::class,'login'])->name('login');