<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/users',[UserController::class,'index'])->name('users.index');
Route::post('/users',[UserController::class,'store'])->name('users.store');
Route::get('/users/create',[UserController::class,'create'])->name('users.create');
