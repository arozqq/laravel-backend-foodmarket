<?php

use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->group(function() {
    Route::get('user', [UserController::class, 'fetch']); // data profile user
    Route::post('user', [UserController::class, 'updateProfile']); // update profile user
    Route::post('user/photo', [UserController::class, 'updatePhoto']); // update photo profile user
    Route::post('logout', [UserController::class, 'logout']); // Logout
    
});

Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);
