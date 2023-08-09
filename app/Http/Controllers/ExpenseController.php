<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;

class ExpenseController extends Controller
{
    // Show the expense creation form
    public function create()
    {
        return view('expense.create');
    }

    // Store the newly created expense record
    public function store(Request $request)
    {
        $this->validate($request, [
            'amount' => 'required|numeric',
            'description' => 'required|string',
            'date' => 'required|date',
            // other fields
        ]);

        // Create a new expense record associated with the logged-in user
        $expense = new Expense([
            'amount' => $request->amount,
            'description' => $request->description,
            'date' => $request->date,
            // other fields
        ]);

        // Associate the expense with the currently authenticated user
        $expense->user()->associate(auth()->user());
        $expense->save();

        return redirect()->route('expense.index')->with('success', 'Expense record added successfully.');
    }

    // Add other methods for displaying, editing, and deleting expenses
}
