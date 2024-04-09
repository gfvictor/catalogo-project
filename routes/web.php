<?php

use App\Http\Controllers\ObjectsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'showHomepage']);
Route::get('/register', [PageController::class, 'showRegister'])->middleware('guests');
Route::post('/login', [PageController::class, 'login']);
Route::post('/logout', [PageController::class, 'logout'])->middleware('logged');
Route::get('/overview/{id}', [PageController::class, 'overview'])->middleware('logged');
Route::get('/create-form', [PageController::class, 'showCreateForm'])->middleware('logged');
Route::get('/edit-form/{object_id}', [PageController::class, 'showEditForm'])->middleware('logged');

Route::post('/register/complete', [UserController::class, 'register']);

Route::post('/create-object', [ObjectsController::class, 'createObject'])->middleware('logged');
Route::put('/objects/{id}', [ObjectsController::class, 'updateObject'])->name('objects.update')->middleware('logged');
Route::delete('/objects/{id}', [ObjectsController::class, 'deleteObject'])->name('objects.delete')->middleware('logged');
