<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
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

Route::middleware( ['guest'])->group(function(){
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
});
Route::get('/home', function(){
    return redirect(('/admin'));
});

Route::middleware(['auth'])->group(function(){
    Route::get('/logout', [SesiController::class, 'logout']);

    //Tampilan kurikulum
    Route::get('admin/dashboard-kurikulum', 'DashboardKurikulumController@index')->name('dashboard-kurikulum.index');
    
    //Tampilan guru
    Route::get('admin/dashboard-guru', 'DashboardGuruController@index')->name('dashboard-guru.index');


    Route::resource('mapel', 'MapelController');
    Route::resource('kelas', 'KelasController');
    Route::resource('master-kelas', 'MasterKelasController');
    Route::resource('siswa', 'SiswaController');
    Route::resource('siswa-wali', 'SiswaWaliController');
    Route::resource('guru', 'GuruController');
    Route::resource('leger', 'LegerController');
    Route::resource('koreksi', 'KoreksiController');
    Route::resource('koreksi', 'KoreksiController');
});