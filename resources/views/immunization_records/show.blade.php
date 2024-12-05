@extends('layouts.app')

@section('title', 'View Immunization Record')

@section('content')
<h1>Immunization Record Details</h1>

<ul class="list-group">
    <li class="list-group-item"><strong>Registration Date:</strong> {{ $immunizationRecord->registration_date }}</li>
    <li class="list-group-item"><strong>Name:</strong> {{ $immunizationRecord->name }}</li>
    <li class="list-group-item"><strong>Age:</strong> {{ $immunizationRecord->age }}</li>
    <li class="list-group-item"><strong>Address:</strong> {{ $immunizationRecord->address }}</li>
    <!-- Add other fields here -->
</ul>

<a href="{{ route('immunization-records.index') }}" class="btn btn-secondary mt-3">Back</a>
@endsection
