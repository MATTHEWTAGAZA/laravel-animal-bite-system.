@extends('layouts.app')

@section('title', 'Add Immunization Record')

@section('content')
<h1>Add Immunization Record</h1>

<form action="{{ route('immunization-records.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="registration_date" class="form-label">Registration Date</label>
        <input type="date" name="registration_date" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" name="age" class="form-control" required>
    </div>
    <!-- Add other fields here following the same pattern -->
    <button type="submit" class="btn btn-success">Save</button>
</form>
@endsection
