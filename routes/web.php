<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest.filter')->group(function(){
    Route::get('/',[LoginController::class,'login']);
    Route::get('/login',[LoginController::class,'login']);
    Route::post('/attemptLogin',[LoginController::class,'attemptLogin']);
});

Route::middleware('auth.filter')->group(function(){
    Route::get('/',[HomeController::class,'dashboard']);
    
    Route::get('/logout',[LoginController::class,'logout']);

    Route::get('/dashboard',[HomeController::class,'dashboard']);
    Route::get('/products',[HomeController::class,'products']);
});
