<?php

use App\Http\Controllers\CalculatorController;
use Illuminate\Support\Facades\Route;

# Display the calculator form
Route::get('/calculator', [CalculatorController::class, 'index']);
