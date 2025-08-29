<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/areas', [AreaController::class, 'index']);

Route::get('/areas/create', function () {
    return view('areas.create');
});

Route::get('/areas/{id}', function ($id) {
    return view('Areas.show', ["id" => $id]);
});
