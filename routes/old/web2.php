<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\Metadata\Uses;
use App\Http\Controllers\EserviceController;
use App\Http\Controllers\SiupController;

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

//Route::post('datakeuangin', [BerandaController::class, 'datakeuangin'])->name('datakeuangin');;
Route::post('/datakeuangin',  'App\Http\Controllers\BerandaController@datakeuangin')->name('datakeuangin');
Route::post('/viewdatanasabih',  'App\Http\Controllers\BerandaController@viewdatanasabih')->name('viewdatanasabih');
Route::post('/konfirmasih',  'App\Http\Controllers\BerandaController@konfirmasih')->name('konfirmasih');
Route::post('/datapekerjain',  'App\Http\Controllers\BerandaController@datapekerjain')->name('datapekerjain');
Route::post('/msgkirimdata',  'App\Http\Controllers\BerandaController@msgkirimdata')->name('msgkirimdata');
//Route::post('viewdatanasabih', [BerandaController::class, 'viewdatanasabih'])->name('viewdatanasabih');

//login
Route::get('/login',  'App\Http\Controllers\BerandaController@login')->name('login');

//CS
Route::get('/dashboardcs',  'App\Http\Controllers\CS\ControllerCS@menu')->name('menu');
Route::get('/non-ocr',  'App\Http\Controllers\CS\ControllerCS@nonocr')->name('nonocr');
Route::get('/permohonan',  'App\Http\Controllers\CS\ControllerCS@permohonan')->name('permohonan');

//KONFIRMASI
Route::get('/konfirmasi/{id_nasabah}', 'App\Http\Controllers\CS\ControllerCS@konfirmasi')->name('konfirmasi.detail');
Route::post('/konfirmasi/{id_nasabah}', 'App\Http\Controllers\CS\ControllerCS@tabungan')->name('konfirmasi.detail.post');

//EDIT NASABAH
Route::get('/edit/{id_nasabah}', 'App\Http\Controllers\CS\ControllerCS@edit')->name('edit.detail');
Route::post('/edit/{id_nasabah}', 'App\Http\Controllers\CS\ControllerCS@update_nasabah')->name('edit.detail.post');

//SELFIE
Route::get('/selfie/{id_nasabah}',  'App\Http\Controllers\CS\ControllerCS@selfie')->name('selfie.detail');

//KIRIM DATA
Route::get('/kirim/{id_nasabah}', 'App\Http\Controllers\CS\ControllerCS@kirim')->name('kirim.detail');
Route::post('/kirim/{id_nasabah}', 'App\Http\Controllers\CS\ControllerCS@cek_data')->name('kirim.detail.post');


Route::get('/registrasi',  'App\Http\Controllers\CS\ControllerCS@registrasi')->name('registrasi');

//KAOPS
Route::get('/kaops',  'App\Http\Controllers\Kaops\ControllerKaops@kaops')->name('kaops');
Route::get('/approval/{id_nasabah}', 'App\Http\Controllers\Kaops\ControllerKaops@approval')->name('approval.detail');
Route::post('/approval/{id_nasabah}', 'App\Http\Controllers\Kaops\ControllerKaops@otorisasi')->name('approval.detail.post');