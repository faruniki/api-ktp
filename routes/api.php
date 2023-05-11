<?php

use App\Http\Controllers\KtpController;
use App\Http\Controllers\PendudukController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/ktp', [KtpController::class, 'index']);
Route::post('/ktp/create', [KtpController::class, 'store']);
Route::post('/ktp/delete/{nik}', [KtpController::class, 'destroy']);
Route::get('/ktp/show/{nik}', [KtpController::class, 'show']);
Route::post('/ktp/update/{nik}', [KtpController::class, 'update']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
