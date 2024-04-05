<?php

use App\Http\Controllers\ObjectController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'showHomepage']);
Route::get('/register', [PageController::class, 'registerPage']);
Route::get('/overview', [PageController::class, 'overview'])->middleware('logged');
Route::post('/login', [PageController::class, 'login']);
Route::post('/logout', [PageController::class, 'logout'])->middleware('logged');

Route::post('/register/complete', [UserController::class, 'register']);
Route::get('/profile', [UserController::class, 'profile'])->middleware('logged');

Route::get('/catalog', [ObjectController::class, 'objectCatalog']);
