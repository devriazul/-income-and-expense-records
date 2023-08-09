
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add New Income</h2>
        <form class="form-control p-md-5 p-3" action="{{ route('income.store') }}" method="post">
            @csrf
            <div class="form-group py-3">
                <label for="amount">Amount</label>
                <input type="text" name="amount" class="form-control" required>
            </div>
            <div class="form-group py-3">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <div class="form-group py-3">
                <label for="date">Date</label>
                <input type="date" name="date" class="form-control" required>
            </div>
            <!-- other fields -->
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary my-3">+ Add Income</button>
                <a href="{{ url('/income') }}" class="btn btn-success my-3">{{ __('Income List') }}</a>
            </div>
        </form>
    </div>
@endsection
