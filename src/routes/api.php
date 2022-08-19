<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
    Route::get('user',function (Request $request){
        return response()->json([
            'status' => 'success',
            'user' => '111',
        ]);
    });
    Route::get('me2','me');
});
Route::prefix('billing')->middleware('auth:api')->group(function (){
    Route::prefix('user')->controller(UserController::class)->group(function (){
        Route::get('{uid}', 'getUser');
    });
});
