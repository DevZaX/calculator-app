<?php

use App\Http\Controllers\CalculatorController;
use Illuminate\Support\Facades\Route;

# Redirect to /calculator from home 
Route::redirect('/', '/calculator', 301);

# Display the calculator form
Route::get('/calculator', [CalculatorController::class, 'index']);

# Handle the calculation
Route::post('/calculator', [CalculatorController::class, 'calculate']);
