<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/modelo1', function () {
    return view('modelo1');
});

Route::get('/invitacion', function () {
    return view('invitacion');
});
