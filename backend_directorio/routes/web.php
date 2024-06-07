<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// routes/api.php
Route::apiResource('contacto', ContactoController::class);
