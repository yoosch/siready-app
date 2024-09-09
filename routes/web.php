<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IrsController;

Route::get('m/dashboard', function () {
    return view('mhsDashboard');
});
Route::get('m/registration', function () {
    return view('mhsRegistrasi');
});
Route::get('m/transcript', function () {
    return view('mhsTranskrip');
});
Route::get('m/login', function () {
    return view('login');
});
Route::get('m/khs', function () {
    return view('mhsKhs');
});
Route::get('m/buat-irs', function () {
    return view('mhsBuatIrs');
});
Route::get('p/dashboard', function () {
    return view('paDashboard');
});
Route::get('p/perwalian', function () {
    return view('paPerwalian');
});
Route::get('m/irs',[IrsController::class,'all']);
Route::get('m/irs/{id}',[IrsController::class,'index']);


