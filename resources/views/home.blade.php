@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">{{ __('Dashboard') }} <p class="fw-bold">Net Income: ${{ $netIncome }}</p></div>

                    <div class="card-body">
                        {{ __('Welcome to your dashboard, ') . Auth::user()->name }}
                        
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">{{ __('Income Summary') }} <a href="{{ route('income.create') }}" class="btn btn-primary">{{ __('Add Income') }}</a></div>

                                    <div class="card-body">
                                        <p>Total Income: ${{ $totalIncome }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">{{ __('Expense Summary') }} <a href="{{ route('expense.create') }}" class="btn btn-danger">{{ __('Add Expense') }}</a></div>

                                    <div class="card-body">
                                        <p>Total Expenses: ${{ $totalExpenses }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
