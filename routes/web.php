<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/beranda', [MenuController::class, 'home']);
Route::get('/info', [MenuController::class, 'info_kegiatan']);
Route::get('/data-siswa', [MenuController::class, 'data_siswa']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('siswa', SiswaController::class);
