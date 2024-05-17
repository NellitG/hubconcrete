<?php

// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Show the form
Route::get('/', [HomeController::class, 'index']);

// Handle form submission
Route::post('/submit-form', [HomeController::class, 'handleForm']);
