<?php

use Illuminate\Support\Facades\Route;

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

// Route::view('/dashboard', 'dashboard');
// Route::view('/', 'pages.auth.login');

// Auth::routes();
Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Penggunaan prefix group
// Route::prefix('master-data')->group(function () {
//     Route::get('/data-karyawan', [CrudController::class, 'index'])->name('dashboard');
//     Route::get('/data-kerja', [CrudController::class, 'edit'])->name('dashboard');
// });
// Route 1 : Maka pada view pemanggilannya = /master-data.data-karyawan atau route('dashboard')
// Route 2 : Maka pada view pemanggilannya = /master-data.data-kerja atau route('dashboard-edit')

// Penggunaan name group
// Route::name('master-data.')->group(function () {
//     Route::get('master-data/data-karyawan', [CrudController::class, 'index'])->name('data-karyawan');
//     Route::get('master-data/data-kerja', [CrudController::class, 'edit'])->name('data-kerja');
// });
// Route 1 : Maka pada view pemanggilannya = /master-data.data-karyawan atau route('master-data.data-karyawan')
// Route 2 : Maka pada view pemanggilannya = /master-data.data-kerja atau route('master-data.data-kerja')

// Penggunaan prefix group dan name group
// Route::name('master-data.')->prefix('master-data')->group(function () {
//     Route::get('/data-karyawan', [CrudController::class, 'index'])->name('data-karyawan');
//     Route::get('/data-kerja', [CrudController::class, 'edit'])->name('data-kerja');
// });
// Route 1 : Maka pada view pemanggilannya = /master-data.data-karyawan atau route('master-data.data-karyawan')
// Route 2 : Maka pada view pemanggilannya = /master-data.data-kerja atau route('master-data.data-kerja')
