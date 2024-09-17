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
Route::get('p/ajuan-irs', function () {
    return view('paAjuanIrs');
});
Route::get('k/dashboard', function () {
    return view('kpDashboard');
});
Route::get('k/buat-jadwal', function () {
    return view('kpBuatJadwal');
});
Route::get('k/rombel', function () {
    return view('kpRombel');
});
Route::get('d/dashboard', function () {
    return view('dkDashboard');
});
Route::get('m/irs',[IrsController::class,'all']);
Route::get('m/irs/{id}',[IrsController::class,'index']);


