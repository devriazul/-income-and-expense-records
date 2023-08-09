<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        $totalIncome = $user->incomes->sum('amount');
        $totalExpenses = $user->expenses->sum('amount');
        $netIncome = $totalIncome - $totalExpenses;

        return view('home', compact('totalIncome', 'totalExpenses', 'netIncome'));
    }


}
