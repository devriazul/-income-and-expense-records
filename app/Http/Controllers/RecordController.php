<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\Expense;

class RecordController extends Controller
{
    // Filter and paginate income records
public function filterIncome(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $incomes = Income::whereBetween('date', [$startDate, $endDate])
            ->orderBy('date', 'desc')
            ->paginate(10); // Paginate the results

        return view('income.index', compact('incomes'));
    }

    // Filter and paginate expense records
    public function filterExpense(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $expenses = Expense::whereBetween('date', [$startDate, $endDate])
            ->orderBy('date', 'desc')
            ->paginate(10); // Paginate the results

        return view('expense.index', compact('expenses'));
    }

}

