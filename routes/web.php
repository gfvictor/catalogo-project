<?php

use App\Http\Controllers\ObjectController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'showHomepage']);
Route::get('/register', [PageController::class, 'showRegister'])->middleware('guests');
Route::post('/login', [PageController::class, 'login']);
Route::post('/logout', [PageController::class, 'logout'])->middleware('logged');
Route::get('/overview', [PageController::class, 'overview'])->middleware('logged');
Route::get('/create-form', [PageController::class, 'showCreateForm'])->middleware('logged');

Route::post('/register/complete', [UserController::class, 'register']);
//Route::get('/profile', [UserController::class, 'profile'])->middleware('logged');

Route::post('/create-object', [ObjectController::class, 'createObject'])->middleware('logged');
