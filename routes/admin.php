<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\ParticipantController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('users')->name('users.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('json', [UserController::class, 'json'])->name('json');
    Route::get('create', [UserController::class, 'create'])->name('create');
    Route::post('store', [UserController::class, 'store'])->name('store');
    Route::post('verify', [UserController::class, 'verify'])->name('verify');
    Route::get('{id}/show', [UserController::class, 'show'])->name('show');
    Route::put('{id}/update', [UserController::class, 'update'])->name('update');
    Route::patch('{id}/update', [UserController::class, 'update'])->name('update');
    Route::delete('/{id}/delete', [UserController::class, 'destroy'])->name('destroy');
});

/**
 * routes of Participants
 */
Route::prefix('participants')->name('participants.')->group(function () {
    Route::get('/', [ParticipantController::class, 'index'])->name('index');
    Route::get('json', [ParticipantController::class, 'json'])->name('json');
    Route::get('create', [ParticipantController::class, 'create'])->name('create');
    Route::post('store', [ParticipantController::class, 'store'])->name('store');
    Route::post('verify', [ParticipantController::class, 'verify'])->name('verify');
    Route::get('{id}/show', [ParticipantController::class, 'show'])->name('show');
    Route::put('{id}/update', [ParticipantController::class, 'update'])->name('update');
    Route::patch('{id}/update', [ParticipantController::class, 'update'])->name('update');
    Route::delete('/{id}/delete', [ParticipantController::class, 'destroy'])->name('destroy');
});

/**
 * routes of Courses
 */
Route::prefix('courses')->name('courses.')->group(function () {
    Route::get('/', [CourseController::class, 'index'])->name('index');
    Route::get('json', [CourseController::class, 'json'])->name('json');
    Route::get('create', [CourseController::class, 'create'])->name('create');
    Route::post('store', [CourseController::class, 'store'])->name('store');
    Route::get('{id}/show', [CourseController::class, 'show'])->name('show');
    Route::put('{id}/update', [CourseController::class, 'update'])->name('update');
    Route::patch('{id}/update', [CourseController::class, 'update'])->name('update');
    Route::delete('/{id}/delete', [CourseController::class, 'destroy'])->name('destroy');
});

/**
 * routes of categories
 */
Route::prefix('categories')->name('categories.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('json', [CategoryController::class, 'json'])->name('json');
});