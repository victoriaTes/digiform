<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CS\ControllerCS;
use App\Http\Controllers\Kaops\ControllerKaops;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ACS\ControllerACS;

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

Route::get('/get-kabupaten/{propinsiKode}', 'App\Http\Controllers\BerandaController@getKabupaten');
Route::get('/get-kecamatan/{kecamatanKode}', 'App\Http\Controllers\BerandaController@getKecamatan');
Route::get('/get-kelurahan/{kelurahanKode}', 'App\Http\Controllers\BerandaController@getKelurahan');

//Route::post('viewdatanasabih', [BerandaController::class, 'viewdatanasabih'])->name('viewdatanasabih');


Route::get('/menu', [AuthController::class, 'menu'])->name('menu');

//login
Route::get('/login', [AuthController::class, 'loginuser'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//USER GANTUNG
Route::get('/disabled', [AuthController::class, 'bantuan']);
Route::post('/disabled', [AuthController::class, 'disabled'])->name('bantuan');

//RESET PASSWORD
Route::get('/reset-password', [AuthController::class, 'resetpassword'])->name('resetpassword');
Route::post('/reset-password', [AuthController::class, 'reset'])->name('reset');

//ACS
Route::prefix('acs')->middleware(['auth', 'checksession', 'role'])->group(function () {

    //REGISTER USER
    Route::get('/adduser', [ControllerACS::class, 'showRegistrationForm'])->name('register');
    Route::get('/adduser', [ControllerACS::class, 'register_option'])->name('register');
    Route::post('/adduser', [ControllerACS::class, 'register']);

    //EDIT USER
    Route::get('/edituser/{id}', [ControllerACS::class, 'edit_user'])->name('user.detail');
    Route::post('/edituser/{id}', [ControllerACS::class, 'update_user'])->name('user.detail.post');

    //LIST USER
    Route::get('/listuser', [ControllerACS::class, 'listuser'])->name('listuser');
    Route::post('/listuser/{id}', [ControllerACS::class, 'deleteuser'])->name('deleteuser');
});

//ROLE
Route::prefix('role')->middleware(['auth', 'checksession', 'role'])->group(function () {

    //ROLE AKSES USER
    Route::get('/listrole', [ControllerACS::class, 'listrole'])->name('listrole');
    Route::post('/listrole/{id}', [ControllerACS::class, 'deleterole'])->name('deleterole');

    //ADD ROLE
    Route::get('/addrole', [ControllerACS::class, 'addrole'])->name('addrole');
    Route::post('/addrole', [ControllerACS::class, 'newrole'])->name('newrole');

    //EDIT ROLE
    Route::get('/editrole/{id}', [ControllerACS::class, 'edit_role'])->name('role.detail');
    Route::post('/editrole/{id}', [ControllerACS::class, 'update_role'])->name('role.detail.post');
});


//JABATAN
Route::prefix('jabatan')->middleware(['auth', 'checksession', 'role'])->group(function () {

    //LIST JABATAN
    Route::get('/listjabatan', [ControllerACS::class, 'listjabatan'])->name('listjabatan');
    Route::post('/listjabatan/{id}', [ControllerACS::class, 'deletejabatan'])->name('deletejabatan');

    //ADD JABATAN
    Route::get('/addjabatan', [ControllerACS::class, 'addjabatan'])->name('addjabatan');
    Route::post('/addjabatan', [ControllerACS::class, 'newjabatan'])->name('newjabatan');

    //EDIT JABATAN
    Route::get('/editjabatan/{id}', [ControllerACS::class, 'edit_jabatan'])->name('jabatan.detail');
    Route::post('/editjabatan/{id}', [ControllerACS::class, 'update_jabatan'])->name('jabatan.detail.post');
});

//LOG
Route::prefix('log')->middleware(['auth', 'checksession', 'role'])->group(function () {

    //LIST USER
    Route::get('/listaudit', [ControllerACS::class, 'listaudit'])->name('listaudit');
});

// //LAPORAN
// Route::prefix('laporan')->middleware(['auth', 'checksession', 'role'])->group(function () {

//     //LIST USER
//      Route::get('/listlaporan', [ControllerCS::class, 'laporan'])->name('listlaporan');
//  });



//CS
Route::prefix('cs')->middleware(['auth', 'checksession', 'role'])->group(function () {

    //Ambil ATM
    Route::get('/atm', [ControllerCS::class, 'atm'])->name('atm.detail');
    Route::post('/atm/checknik', [ControllerCS::class, 'checkNIK'])->name('atm.checknik');
    Route::post('/atm/checkdukcapil', [ControllerCS::class, 'checkFaceDukcapil'])->name('atm.checkdukcapil');
    Route::post('/atm/sendotp', [ControllerCS::class, 'sendOtp'])->name('atm.sendotp');
    Route::post('/atm/token', [ControllerCS::class, 'token'])->name('atm.token');
    Route::post('/atm/save', [ControllerCS::class, 'atmSave'])->name('atm.save');

    //REGIS ID
    Route::get('/registrasi', [ControllerCS::class, 'registrasi'])->name('registrasi.detail');
    Route::post('/registrasi', [ControllerCS::class, 'reg_id'])->name('registrasi.detail.post');

    //PERMOHONAN
    Route::get('/permohonan', [ControllerCS::class, 'permohonan'])->name('permohonan');

    //KONFIRMASI
    Route::get('/konfirmasi/{reg_id}', [ControllerCS::class, 'konfirmasi'])->name('konfirmasi.detail');
    Route::post('/konfirmasi/{reg_id}', [ControllerCS::class, 'tabungan'])->name('konfirmasi.detail.post');

    //EDIT NASABAH
    Route::get('/edit/{reg_id}', [ControllerCS::class, 'editview'])->name('edit.detail');

    //MENU SELFIE
    Route::get('/lokasi/{reg_id}', [ControllerCS::class, 'lokasi'])->name('lokasi.detail');

    //SELFIE
    Route::get('/selfie/{reg_id}', [ControllerCS::class, 'selfie'])->name('selfie.detail');
    Route::post('/selfie/{reg_id}', [ControllerCS::class, 'upload'])->name('selfie.detail.post');

    //KIRIM DATA
    Route::get('/kirim/{reg_id}', [ControllerCS::class, 'kirim'])->name('kirim.detail');
    Route::post('/kirim/{reg_id}', [ControllerCS::class, 'cek_data'])->name('kirim.detail.post');

    Route::get('/listlaporan', [ControllerCS::class, 'laporan'])->name('listlaporan');
    //PRINT
    Route::get('/print/{reg_id}', [ControllerKaops::class, 'print'])->name('print.detail');
    Route::get('/printatm/{nik}', [ControllerCS::class, 'printatm'])->name('print.atm');
});


//KAOPS
Route::prefix('kaops')->middleware(['auth', 'checksession', 'role'])->group(function () {

    //MENU
    Route::get('/menu', [ControllerKaops::class, 'kaops'])->name('kaops');

    //EDIT
    Route::get('/edit', [ControllerKaops::class, 'editkaops'])->name('editkaops.detail');

    // //APPROVAL
    // Route::get('/approval/{reg_id}', [ControllerKaops::class, 'approval_menu'])->name('approval.detail');
    // Route::post('/approval/{reg_id}', [ControllerKaops::class, 'approval'])->name('approval.detail.post');
    // Route::post('/approval/{reg_id}', [ControllerKaops::class, 'reject'])->name('reject.detail.post');

    //APPROVAL
    Route::get('/approval/{reg_id}', [ControllerKaops::class, 'approval_menu'])->name('approval.detail');
    Route::post('/approval/{reg_id}', [ControllerKaops::class, 'approval'])->name('approval.detail.post');
    Route::post('/reject/{reg_id}', [ControllerKaops::class, 'reject'])->name('reject.detail.post');
});
