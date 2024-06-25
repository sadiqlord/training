<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterUserController;

Route::view('/','home');
Route::view('/about','about');

// Route::get('/jobs/create', [JobController::class,'create']);
// Route::post('/jobs', [JobController::class,'store']);
// Route::get('/jobs', [JobController::class,'index']);
// Route::get('/jobs/{job}', [JobController::class,'show']);
// Route::get('/jobs/{job}/edit',[JobController::class,'edit']);
// Route::patch('/jobs/{job}',[JobController::class,'update']);
// Route::delete('/jobs/{job}',[JobController::class,'destroy']);

Route::resource('jobs',JobController::class);

Route::get('/register',[RegisterUserController::class,'create']);
Route::post('/register',[RegisterUserController::class,'store']);

Route::get('/login',[SessionController::class,'create']);
Route::post('/login',[SessionController::class,'store']);
Route::post('/logOut',[SessionController::class,'destroy']);

Route::view('/contact','contact');
