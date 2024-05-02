<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\Metadata\Uses;
use App\Http\Controllers\EserviceController;
use App\Http\Controllers\SiupController;
use App\Http\Controllers\Cek;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//beranda
Route::get('/',  'App\Http\Controllers\BerandaController@index')->name('landing');
Route::get('/termcondition',  'App\Http\Controllers\BerandaController@termcondition')->name('termcondition');
Route::get('/openaccount',  'App\Http\Controllers\BerandaController@openaccount')->name('openaccount');
Route::get('/addaccount',  'App\Http\Controllers\BerandaController@addaccount')->name('addaccount');
Route::get('/konfirmasi',  'App\Http\Controllers\BerandaController@konfirmasi')->name('konfirmasi');
Route::get('/datapekerjaan',  'App\Http\Controllers\BerandaController@datapekerjaan')->name('datapekerjaan');
Route::get('/datakeuangan',  'App\Http\Controllers\BerandaController@datakeuangan')->name('datakeuangan');
Route::post('/unggahfoto',  'App\Http\Controllers\BerandaController@unggahfoto')->name('unggahfoto');
Route::get('/viewdatanasabah',  'App\Http\Controllers\BerandaController@viewdatanasabah')->name('viewdatanasabah');
Route::get('/frekuensitransaksi',  'App\Http\Controllers\BerandaController@frekuensitransaksi')->name('frekuensitransaksi');
Route::get('/estimasiperkiraan',  'App\Http\Controllers\BerandaController@estimasiperkiraan')->name('estimasiperkiraan');

Route::get('/ceknik',  'App\Http\Controllers\Cek@ceknik')->name('ceknik');
Route::get('/home',  'App\Http\Controllers\Cek@home')->name('home');

//Route::get('/msgkirimdata',  'App\Http\Controllers\BerandaController@msgkirimdata')->name('msgkirimdata');

//Route::post('datakeuangin', [BerandaController::class, 'datakeuangin'])->name('datakeuangin');;
Route::post('/datakeuangin',  'App\Http\Controllers\BerandaController@datakeuangin')->name('datakeuangin');
Route::post('/viewdatanasabih',  'App\Http\Controllers\BerandaController@viewdatanasabih')->name('viewdatanasabih');
Route::post('/konfirmasih',  'App\Http\Controllers\BerandaController@konfirmasih')->name('konfirmasih');
Route::post('/datapekerjain',  'App\Http\Controllers\BerandaController@datapekerjain')->name('datapekerjain');
Route::post('/msgkirimdata',  'App\Http\Controllers\BerandaController@msgkirimdata')->name('msgkirimdata');
Route::post('/konfirmasa',  'App\Http\Controllers\BerandaController@konfirmasa')->name('konfirmasa');
Route::post('/estimasiperkirain',  'App\Http\Controllers\BerandaController@estimasiperkirain')->name('estimasiperkirain');
Route::post('/frekuensitransaksa',  'App\Http\Controllers\BerandaController@frekuensitransaksa')->name('frekuensitransaksa');

Route::post('/ktpnikcek',  'App\Http\Controllers\Cek@ktpnikcek')->name('ktpnikcek');

Route::post('/konfirmasah',  'App\Http\Controllers\Cek@konfirmasah')->name('konfirmasah');

Route::post('/editkonfirmasi',  'App\Http\Controllers\Cek@editkonfirmasi')->name('editkonfirmasi');
Route::post('/editpekerjaan',  'App\Http\Controllers\Cek@editpekerjaan')->name('editpekerjaan');
Route::post('/editestimasiperkiraan',  'App\Http\Controllers\Cek@editestimasiperkiraan')->name('editestimasiperkiraan');
Route::post('/editfrekuensitransaksi',  'App\Http\Controllers\Cek@editfrekuensitransaksi')->name('editfrekuensitransaksi');

Route::post('/emaildigi',  'App\Http\Controllers\c_email@emaildigi')->name('emaildigi');

//Route::post('viewdatanasabih', [BerandaController::class, 'viewdatanasabih'])->name('viewdatanasabih');