<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});



//Route::post("/register",[UserController::class, "create"])->name("register");
//Route::post("/login", [UserController::class, "login"])->name("login");

Route::post('/inscription', [InscriptionController::class, 'store']);

// Inscription
Route::get('/register', [UserController::class, 'create'])->name('register');
Route::post('/login', [UserController::class, 'login']);
