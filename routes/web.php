<?php

use App\Http\Controllers\DudiController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HumasController;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KelasSiswaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SiswaPklController;
use App\Http\Controllers\TapelController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('dudis', DudiController::class);
Route::resource('jurusans', JurusanController::class);
Route::resource('tapels', TapelController::class);
Route::resource('kelas', KelasController::class);
Route::resource('siswas', SiswaController::class);
Route::resource('gurus', GuruController::class);
Route::resource('kelassiswas', KelasSiswaController::class);
Route::resource('siswapkls', SiswaPklController::class);
Route::resource('humas', HumasController::class);
Route::resource('jurnals', JurnalController::class);

