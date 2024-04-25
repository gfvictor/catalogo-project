<?php

use App\Http\Controllers\ObjectsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'showHomepage']);
Route::post('/login', [PageController::class, 'login']);

Route::group(['middleware' => 'guests'], function () {
    Route::get('/register', [PageController::class, 'showRegister'])->name('registering');
    Route::post('/register', [UserController::class, 'register'])->name('registered');
});

Route::group(['prefix' => 'page', 'middleware' => 'logged'], function () {
    Route::post('/logout', [PageController::class, 'logout'])->name('logout');
    Route::get('/overview/{id}', [PageController::class, 'overview'])->name('overview');
    Route::get('/create-form', [PageController::class, 'showCreateForm'])->name('create-form');
    Route::get('/edit-form/{id}', [PageController::class, 'showEditForm'])->name('edit-form');
});

Route::group(['prefix' => 'objects', 'middleware' => 'logged'], function () {
    Route::post('/create', [ObjectsController::class, 'createObject'])->name('create');
    Route::get('/search/{term}', [ObjectsController::class, 'searchObject'])->name('search');
    Route::put('/update/{id}', [ObjectsController::class, 'updateObject'])->name('update');
    Route::delete('/delete/{id}', [ObjectsController::class, 'deleteObject'])->name('delete');
});
