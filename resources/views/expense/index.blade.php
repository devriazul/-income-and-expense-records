@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Expense Records</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Amount</th>
                    <!-- other columns -->
                </tr>
            </thead>
            <tbody>
                @foreach($expenses as $expense)
                <tr>
                    <td>{{ $expense->date }}</td>
                    <td>{{ $expense->description }}</td>
                    <td>{{ $expense->amount }}</td>
                    <!-- other columns -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
