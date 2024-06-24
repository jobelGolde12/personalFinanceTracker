<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});
// Route::middleware('auth:sanctum')
Route::post('/addUser', [UserController::class , 'store']);
// Route::get('/getUser', [UserController::class, 'index']);
Route::post('/login', [UserController::class, 'login'])->name("login.post");
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/getUser', [UserController::class, 'getTheUser']);