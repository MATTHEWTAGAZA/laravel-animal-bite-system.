@extends('layouts.app')

@section('title', 'Immunization Records')

@section('content')
<h1>Immunization Records</h1>
<a href="{{ route('immunization-records.create') }}" class="btn btn-primary mb-3">Add New Record</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Registration Date</th>
            <th>Name</th>
            <th>Age</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($records as $record)
        <tr>
            <td>{{ $record->id }}</td>
            <td>{{ $record->registration_date }}</td>
            <td>{{ $record->name }}</td>
            <td>{{ $record->age }}</td>
            <td>
                <a href="{{ route('immunization-records.show', $record->id) }}" class="btn btn-info btn-sm">View</a>
                <a href="{{ route('immunization-records.edit', $record->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('immunization-records.destroy', $record->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
