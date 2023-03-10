<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessagesController;

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

Route::get('/users', [UserController::class , 'index']);
Route::prefix('/user')->group( function () {
    Route::post('/store', [UserController::class, 'store']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
    }
);
Route::get('/messages', [MessagesController::class , 'index']);
Route::prefix('/message')->group( function () {
    Route::post('/store', [MessagesController::class, 'store']);
    Route::put('/{id}', [MessagesController::class, 'update']);
    Route::delete('/{id}', [MessagesController::class, 'destroy']);
    }
);
?>