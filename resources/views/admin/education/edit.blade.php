@extends('admin.layout')

@push('style')
    <title>Edit Education</title>
@endpush

@section('main-content')
    <div class="container">
        <h2>Edit Education</h2>
        <form action="{{ route('admin.education.update', $education->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Degree</label>
                <input type="text" name="degree" class="form-control" value="{{ $education->name ?? $education->degree }}" required>
            </div>
            <div class="form-group">
                <label>Institute</label>
                <input type="text" name="institute" class="form-control" value="{{ $education->institute }}" required>
            </div>
            <div class="form-group">
                <label>Enrolled Year</label>
                <input type="text" name="enrolled_year" class="form-control" value="{{ $education->enrolled_year }}" required>
            </div>
            <div class="form-group">
                <label>Passing Year</label>
                <input type="text" name="passing_year" class="form-control" value="{{ $education->passing_year }}" required>
            </div>
            <div class="form-group">
                <label>Grade</label>
                <input type="text" name="grade" class="form-control" value="{{ $education->grade }}">
            </div>
            <button type="submit" class="btn btn-primary">Update Education</button>
        </form>
    </div>
@endsection
