@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Income Records</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($incomes as $income)
                    <tr>
                        <td>{{ $income->date }}</td>
                        <td>{{ $income->amount }}</td>
                        <td>{{ $income->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $incomes->links() }} <!-- Display pagination links -->
    </div>
@endsection
