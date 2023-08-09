@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add New Expense</h2>
        <form action="{{ route('expense.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="text" name="amount" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date" class="form-control" required>
            </div>
            <!-- other fields -->
            <button type="submit" class="btn btn-primary">Add Expense</button>
        </form>
    </div>
@endsection
