<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;

class IncomeController extends Controller
{
    // Show the income creation form
    public function create()
    {
        return view('income.create');
    }

    // Store the newly created income record
    public function store(Request $request)
    {
        $this->validate($request, [
            'amount' => 'required|numeric',
            'description' => 'required|string',
            'date' => 'required|date',
            // other fields
        ]);

        // Create a new income record associated with the logged-in user
        $income = new Income([
            'amount' => $request->amount,
            'description' => $request->description,
            'date' => $request->date,
            // other fields
        ]);
        
        // Associate the income with the currently authenticated user
        $income->user()->associate(auth()->user());
        $income->save();

        return redirect()->route('income.index')->with('success', 'Income record added successfully.');
    }
}

