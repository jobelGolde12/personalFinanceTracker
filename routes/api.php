<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
// Route::middleware('auth:sanctum')
Route::post('/addUser', [UserController::class , 'store']);
// Route::get('/getUser', [UserController::class, 'index']);
Route::post('/login', [UserController::class, 'login']);
// ->name("login.post")
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/getUser', [UserController::class, 'getTheUser']);
Route::options('/{any}', function () {
    return response()->json([], 200);
})->where('any', '.*');
