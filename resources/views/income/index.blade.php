@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Income Records</h2>
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
                @foreach($incomes as $income)
                <tr>
                    <td>{{ $income->date }}</td>
                    <td>{{ $income->description }}</td>
                    <td>{{ $income->amount }}</td>
                    <!-- other columns -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
