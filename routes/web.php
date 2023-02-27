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

use App\Http\Controllers\Guru\SiswaPklController as GuruSiswaPklController;

use App\Http\Controllers\Dudi\SiswaPklController as DudiSiswaPklController;
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

Route::group(['middleware' =>  'guest'], function(){
    Route::get('/login',[LoginController::class,'login'])->name('login');
    Route::post('/login',[LoginController::class,'postlogin'])->name('postlogin');
});

Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => ['auth:humas,siswa', 'ceklevel:Siswa,Humas']], function(){
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
    Route::get('humas/jurusan-export',[HumasJurusanController::class,'jurusanexport'])->name('export-jurusan');
    Route::get('humas/tapel-export',[HumasTapelController::class,'tapelexport'])->name('export-tapel');
    Route::get('humas/kelas-export',[HumasKelasController::class,'kelasexport'])->name('export-kelas');
    Route::get('humas/siswa-export',[HumasSiswaController::class,'siswaexport'])->name('export-siswa');
    Route::get('humas/guru-export',[HumasGuruController::class,'guruexport'])->name('export-guru');
    Route::get('humas/kelassiswa-export',[HumasKelasSiswaController::class,'kelassiswaexport'])->name('export-kelassiswa');
    Route::get('humas/siswapkl-export',[HumasSiswaPklController::class,'siswapklexport'])->name('export-siswapkl');
    Route::get('humas/datahumas-export',[HumasHumasController::class,'datahumasexport'])->name('export-datahumas');
    Route::get('humas/jurnal-export',[HumasJurnalController::class,'jurnalexport'])->name('export-jurnal');
});


Route::group(['middleware' => ['auth:guru', 'ceklevel:Guru']], function(){
    Route::get('/guru/dashboard', function () {
        return view('guru.dashboard');
    })->middleware('auth');

    Route::resource('guru/siswapkl', GuruSiswaPklController::class);
    Route::get('guru/siswapkl-export',[GuruSiswaPklController::class,'siswapklexport'])->name('export-siswapkl');
});

Route::group(['middleware' => ['auth:dudi', 'ceklevel:Dudi']], function(){
    Route::get('/dudi/dashboard', function () {
        return view('dudi.dashboard');
    })->middleware('auth');

    Route::resource('dudi/siswapkl', DudiSiswaPklController::class);
    Route::get('dudi/siswapkl-export',[DudiSiswaPklController::class,'siswapklexport'])->name('export-siswapkl');
});