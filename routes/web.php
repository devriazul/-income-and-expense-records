<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpenseController; // Import the ExpenseController
use App\Http\Controllers\RecordController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    // Display the form to create a new income record
    Route::get('/income/create', [IncomeController::class, 'create'])->name('income.create');

    // Process the form submission for creating a new income record
    Route::post('/income/store', [IncomeController::class, 'store'])->name('income.store');

    // Display the list of income records
    Route::get('/income', [RecordController::class, 'filterIncome'])->name('income.index');

    // Display the form to create a new expense record
    Route::get('/expense/create', [ExpenseController::class, 'create'])->name('expense.create');

    // Process the form submission for creating a new expense record
    Route::post('/expense/store', [ExpenseController::class, 'store'])->name('expense.store');

    // Display the list of expense records
    Route::get('/expense', [RecordController::class, 'filterExpense'])->name('expense.index');
});

