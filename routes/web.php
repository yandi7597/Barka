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

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/praktek', function () {
    return view('praktek.index');
});
Route::get('/user', function () {
    return view('user');
});
Route::get('/apotek', function () {
    return view('apotek.index');
});
Route::get('/aboutus', function () {
    return view('aboutus.index');
});
Route::get('/callcenter', function () {
    return view('callcenter.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin-page', function() {
    return view('dashboard');
})->middleware('role:admin')->name('admin.page');

Route::get('user-page', function() {
    return view('user');
})->middleware('role:user')->name('user.page');

Route::resource('obat', 'ObatController');
Route::resource('obatbebas', 'ObatbebasController');
Route::resource('obatresep', 'ObatresepController');
Route::resource('obatherbal', 'ObatherbalController');
Route::resource('vitamin', 'VitaminController');
Route::resource('mombaby', 'MombabyController');
Route::resource('beauty', 'BeautyController');
Route::resource('dokter', 'DokterController');
Route::resource('pasien', 'PasienController');
Route::resource('rekammedis', 'RekammedisController');
Route::resource('pemeriksaan', 'PemeriksaanController');
Route::resource('petugas', 'PetugasController');
