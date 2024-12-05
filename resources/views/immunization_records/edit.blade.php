@extends('layouts.app')

@section('title', 'Edit Immunization Record')

@section('content')
<h1>Edit Immunization Record</h1>

<form action="{{ route('immunization-records.update', $immunizationRecord->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="registration_date" class="form-label">Registration Date</label>
        <input type="date" name="registration_date" class="form-control" value="{{ $immunizationRecord->registration_date }}" required>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" value="{{ $immunizationRecord->name }}" required>
    </div>
    <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" name="age" class="form-control" value="{{ $immunizationRecord->age }}" required>
    </div>
    <!-- Add other fields here following the same pattern -->
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
