<?php

use App\Http\Controllers\LoginController;
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


Route::group(['middleware' =>  'guest'], function(){
    Route::get('/login',[LoginController::class,'login'])->name('login');
    Route::post('/login',[LoginController::class,'postlogin'])->name('postlogin');
});

Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => ['auth:guru,humas,siswa,dudi', 'ceklevel:Guru,Siswa,Dudi,Humas']], function(){
    Route::get('/home', function () {
        return view('welcome');
    })->middleware('auth');

    Route::resource('humas/dudi', DudiController::class);
    Route::resource('humas/jurusan', JurusanController::class);
    Route::resource('humas/tapel', TapelController::class);
    Route::resource('humas/kelas', KelasController::class);
    Route::resource('humas/siswa', SiswaController::class);
    Route::resource('humas/guru', GuruController::class);
    Route::resource('humas/kelassiswa', KelasSiswaController::class);
    Route::resource('humas/siswapkl', SiswaPklController::class);
    Route::resource('humas/datahumas', HumasController::class);
    Route::resource('humas/jurnal', JurnalController::class);

    Route::get('humas/dudi-export',[DudiController::class,'dudiexport'])->name('export-dudi');
});