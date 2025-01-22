<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\TaskMiddleware;
use App\Http\Controllers\API\UserAuthController;

Route::post('register',[UserAuthController::class,'register']);
Route::post('login',[UserAuthController::class,'login']);
Route::post('logout',[UserAuthController::class,'logout'])
  ->middleware('auth:sanctum');

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::middleware('auth:sanctum')->group(function () {
    // Route::middleware([TaskMiddleware::class])->group(function () {
        Route::apiResource('/tasks', \App\Http\Controllers\API\TaskControllerAPI::class);
    // });
});