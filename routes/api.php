<?php

use App\Http\Controllers\CekKtpController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquirybyNikController;
use App\Http\Controllers\KycCifController;
use App\Http\Controllers\Tes;
use App\Http\Controllers\CheckNikDukcapilController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('inquirybyNik', [InquirybyNikController::class, 'index']);
Route::post('cekKtp', [CekKtpController::class, 'index']);
Route::post('kycCif', [KycCifController::class, 'index']);
Route::post('checkNikDukcapil', [CheckNikDukcapilController::class, 'index']);
Route::get('splog', [Tes::class, 'splog']);
Route::post('log_activity', [Tes::class, 'logActivity']);
