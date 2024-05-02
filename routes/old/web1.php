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
Route::get('/login',  'App\Http\Controllers\BerandaController@login')->name('login');
Route::get('/dashboardcs',  'App\Http\Controllers\BerandaController@menu')->name('menu');
Route::get('/non-ocr',  'App\Http\Controllers\BerandaController@nonocr')->name('nonocr');
Route::get('/permohonan',  'App\Http\Controllers\BerandaController@permohonan')->name('permohonan');
Route::get('/konfirmasi',  'App\Http\Controllers\BerandaController@konfirmasi')->name('konfirmasi');
Route::get('/edit',  'App\Http\Controllers\BerandaController@edit')->name('edit');
Route::get('/selfie',  'App\Http\Controllers\BerandaController@selfie')->name('selfie');
Route::get('/kirim',  'App\Http\Controllers\BerandaController@kirim')->name('kirim');
Route::get('/registrasi',  'App\Http\Controllers\BerandaController@registrasi')->name('registrasi');
Route::get('/kaops',  'App\Http\Controllers\BerandaController@kaops')->name('kaops');
Route::get('/approval',  'App\Http\Controllers\BerandaController@approval')->name('approval');