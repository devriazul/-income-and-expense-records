@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Income Record</h2>
        <form action="{{ route('income.update', $income->id) }}" method="post">
            @csrf
            @method('PUT')
            <!-- Form fields for editing -->
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
