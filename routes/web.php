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

Route::group(['prefix' => 'objects', 'middleware' => 'logged'], function () {
    Route::post('/create', [ObjectsController::class, 'createObject'])->name('create');
    Route::get('/search', [ObjectsController::class, 'searchObject'])->name('search');
    Route::put('/update/{id}', [ObjectsController::class, 'updateObject'])->name('update');
    Route::delete('/delete/{id}', [ObjectsController::class, 'deleteObject'])->name('delete');
});
