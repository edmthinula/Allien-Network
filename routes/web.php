<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/areas', [AreaController::class, 'index'])->name('areas.index');

Route::get('/areas/create', [AreaController::class, 'create'])->name('areas.create');

Route::get('/areas/{id}', [AreaController::class, 'show'])->name('areas.show');

Route::post('/areas',[AreaController::class,'store'])->name('areas.store');

Route::delete('/area/{id}',[AreaController::class,'destroy'])-> name('areas.delete');
