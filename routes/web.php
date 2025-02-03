<?php
// packages/YourVendor/Calculator/routes/web.php
use Illuminate\Support\Facades\Route;
use DibVendor\MyCalculator\Http\Controllers\CalculatorController;

Route::get('/calculator', [CalculatorController::class, 'show'])->name('calculator.show');
Route::post('/calculate', [CalculatorController::class, 'calculate'])->name('calculate');
