<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/class-list', [ClassController::class, 'index'])
        ->middleware('check.role:admin,teacher,student');
    
    Route::post('/add-class', [ClassController::class, 'store'])
        ->middleware('check.role:admin,teacher');
    
    Route::delete('/delete-class/{id}', [ClassController::class, 'destroy'])
        ->middleware('check.role:admin');
});