<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IrsController;

Route::get('m/dashboard', function () {
    return view('dashboardMhs');
});
Route::get('p/dashboard', function () {
    return view('dashboardPA');
});
Route::get('m/registration', function () {
    return view('registrasiMhs');
});
Route::get('m/transcript', function () {
    return view('transkripMhs');
});
Route::get('m/login', function () {
    return view('login');
});
Route::get('m/khs', function () {
    return view('khs');
});
Route::get('m/buat-irs', function () {
    return view('isiIrs');
});
Route::get('m/irs',[IrsController::class,'all']);
Route::get('m/irs/{id}',[IrsController::class,'index']);


