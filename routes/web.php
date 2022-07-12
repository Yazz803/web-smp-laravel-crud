<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\DataSiswaPpdbController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WebSmpController;
use App\Models\DataSiswaPpdb;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WebSmpController::class, 'home']);
Route::get('/about', [WebSmpController::class, 'about']);
Route::get('/gallery', [WebSmpController::class, 'gallery']);
Route::get('/contact', [WebSmpController::class, 'contact']);

Route::get('/daftarppdb', [DataSiswaPpdbController::class, 'index']);
Route::post('/daftarppdb', [DataSiswaPpdbController::class, 'store']);
Route::get('/daftarppdb/success', [DataSiswaPpdbController::class, 'success']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function(){
    return view('dashboard.index',[
        'baseurl' => DashboardController::BASEURL
    ]);
})->middleware('auth');
Route::get('/dashboard/tambahadmin', function(){
    return view('dashboard.register.index',[
        'baseurl' => DashboardController::BASEURL
    ]);
});
// Route::resource('/dashboard/datasiswa', DashboardController::class)->middleware('auth');
Route::get('/dashboard/datasiswa', [DashboardController::class, 'index']);
Route::get('/dashboard/datasiswa/{dataSiswaPpdb:nisn}', [DashboardController::class, 'show']);
Route::delete('/dashboard/datasiswa/{dataSiswaPpdb:nisn}', [DashboardController::class, 'destroy']);
Route::get('/dashboard/datasiswa/{dataSiswaPpdb:nisn}/edit', [DashboardController::class, 'edit']);
Route::put('/dashboard/datasiswa/{dataSiswaPpdb:nisn}', [DashboardController::class, 'update']);
Route::post('/register', [RegisterController::class, 'store'])->middleware('auth');
