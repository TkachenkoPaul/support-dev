<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FeesController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});
Route::prefix('billing')->middleware('auth:api')->group(function (){
    Route::get('users',[UserController::class,'getUsers']);
    Route::prefix('users')->controller(UserController::class)->group(function (){
        Route::get('{uid}', 'getUser');
    });
    Route::get('payments',[PaymentsController::class,'index']);
    Route::get('payments/{billId}',[PaymentsController::class,'userPayments']);
    Route::get('fees',[FeesController::class,'index']);
    Route::get('fees/{billId}',[FeesController::class,'userFees']);
});
