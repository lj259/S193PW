<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Principal');
});
Route::get('/Registro', function () {
    return view('Registro');
});
