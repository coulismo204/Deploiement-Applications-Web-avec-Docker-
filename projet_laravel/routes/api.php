<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::get("/register",[UserController::class, "formulaire"])->name("formulaire");
Route::get("/login", [UserController::class, "connexion"])->name("connexion");

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
