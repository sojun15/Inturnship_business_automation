<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::view('/','login');

Route::post('/login', [AuthController::class, 'login']);

Route::get('/home', function () {
    return view('homePage', [
        'userName' => session('userName'),
        'tasks' => session('tasks', [])
    ]);
})->name('homePage');

Route::post('/homePage', [AuthController::class, 'addTask']);