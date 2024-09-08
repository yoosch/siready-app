<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IrsController;

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
Route::get('khs', function () {
    return view('khs');
});
Route::get('isi-irs', function () {
    return view('isiIrs');
});
Route::get('/irs',[IrsController::class,'all']);
Route::get('/irs/{id}',[IrsController::class,'index']);


