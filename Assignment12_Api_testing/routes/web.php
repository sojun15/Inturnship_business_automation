<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
})->name('dashboard');

// Add to routes/web.php
Route::get('/test-web', function () {
    return response()->json(['message' => 'Web route is working!']);
});