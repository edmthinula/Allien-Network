<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/areas', function () {
    $areas = [
        ["name" => "Area 51", "population" => 345, "id" => "1"],
        ["name" => "Area 61", "population" => 365, "id" => "2"],
        ["name" => "Area 71", "population" => 425, "id" => "3"],
    ];
    return view('Areas.index', ["areas" => $areas]);
});

Route::get('/areas/create', function () {
    return view('areas.create');
});

Route::get('/areas/{id}', function ($id) {
    return view('Areas.show', ["id" => $id]);
});