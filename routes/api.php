<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CorrespondenceController;
use App\Http\Controllers\JobDetailController;
use App\Http\Controllers\JobResultController;
use App\Http\Controllers\PaymentDetailController;
use App\Http\Controllers\PihakDuaController;
use App\Http\Controllers\PihakSatuController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);

//Correspondence
Route::post('correspondece', [CorrespondenceController::class, 'store']);

//Surat
