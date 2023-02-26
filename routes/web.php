<?php

use App\Http\Controllers\LoginController as LoginController;

use App\Http\Controllers\Humas\DudiController as HumasDudiController;
use App\Http\Controllers\Humas\GuruController as HumasGuruController;
use App\Http\Controllers\Humas\HumasController as HumasHumasController;
use App\Http\Controllers\Humas\JurnalController as HumasJurnalController;
use App\Http\Controllers\Humas\JurusanController as HumasJurusanController;
use App\Http\Controllers\Humas\KelasController as HumasKelasController;
use App\Http\Controllers\Humas\KelasSiswaController as HumasKelasSiswaController;
use App\Http\Controllers\Humas\SiswaController as HumasSiswaController;
use App\Http\Controllers\Humas\SiswaPklController as HumasSiswaPklController;
use App\Http\Controllers\Humas\TapelController as HumasTapelController;
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


Route::group(['middleware' =>  'guest'], function(){
    Route::get('/login',[LoginController::class,'login'])->name('login');
    Route::post('/login',[LoginController::class,'postlogin'])->name('postlogin');
});

Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => ['auth:guru,humas,siswa,dudi', 'ceklevel:Guru,Siswa,Dudi,Humas']], function(){
    Route::get('/humas/dashboard', function () {
        return view('humas.dashboard');
    })->middleware('auth');

    Route::resource('humas/dudi', HumasDudiController::class);
    Route::resource('humas/jurusan', HumasJurusanController::class);
    Route::resource('humas/tapel', HumasTapelController::class);
    Route::resource('humas/kelas', HumasKelasController::class);
    Route::resource('humas/siswa', HumasSiswaController::class);
    Route::resource('humas/guru', HumasGuruController::class);
    Route::resource('humas/kelassiswa', HumasKelasSiswaController::class);
    Route::resource('humas/siswapkl', HumasSiswaPklController::class);
    Route::resource('humas/datahumas', HumasHumasController::class);
    Route::resource('humas/jurnal', HumasJurnalController::class);

    Route::get('humas/dudi-export',[HumasDudiController::class,'dudiexport'])->name('export-dudi');
});