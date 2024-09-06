<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboardMhs');
});
Route::get('registration', function () {
    return view('registrasiMhs');
});
Route::get('transcript', function () {
    return view('transkripMhs');
});
Route::get('login', function () {
    return view('login');
});
