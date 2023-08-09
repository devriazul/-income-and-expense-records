@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Expense Records</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($expenses as $expense)
                    <tr>
                        <td>{{ $expense->date }}</td>
                        <td>{{ $expense->amount }}</td>
                        <td>{{ $expense->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $expenses->links() }} <!-- Display pagination links -->
    </div>
@endsection
