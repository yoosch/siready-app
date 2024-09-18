<?php

<<<<<<< HEAD
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
=======
use App\Http\Controllers\IrsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\product;
use App\Http\Controllers\productController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use Monolog\Registry;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});






Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'authenticate']);


Route::get('dashboard',function(){
    if(auth()->user()->role == 'Student'){
        return app('App\Http\Controllers\DashboardController')->index();
    }else{
        return view('paDashboard');
    }
})->name('dashboard');

Route::get('/logout',[LoginController::class,'logout']);



Route::get('registration',[RegisterController::class,'index']);


Route::get('product/{product}/delete',[ProductsController::class,'destroy']);

Route::post('/register',[RegisterController::class,'store']);




Route::resource('product', ProductsController::class);



Route::get('/p',function(){
    return view('desbor');
});

Route::get('/m',function(){
    return view('maintenance');
});


//IRS
Route::get('/irs',[IrsController::class,'all']);
Route::get('/irs/{id}',[IrsController::class,'index']);

//All

>>>>>>> nippot2
Route::get('m/khs', function () {
    return view('mhsKhs');
});
Route::get('m/buat-irs', function () {
    return view('mhsBuatIrs');
});
<<<<<<< HEAD
Route::get('p/dashboard', function () {
    return view('paDashboard');
});
=======

>>>>>>> nippot2
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
<<<<<<< HEAD
Route::get('d/dashboard', function () {
    return view('dkDashboard');
});
Route::get('m/irs',[IrsController::class,'all']);
Route::get('m/irs/{id}',[IrsController::class,'index']);
=======
>>>>>>> nippot2


