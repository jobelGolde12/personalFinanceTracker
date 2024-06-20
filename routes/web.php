<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::middleware('auth:sanctum')
Route::post('/addUser', [UserController::class , 'store']);
// Route::get('/getUser', [UserController::class, 'index']);
Route::post('/login', [UserController::class, 'login']);
