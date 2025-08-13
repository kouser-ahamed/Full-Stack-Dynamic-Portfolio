@extends('admin.layout')

@push('style')
    <title>Admin - Add Experience</title>
@endpush

@section('main-content')
    <div class="container">
        <h2>Add Experience</h2>
        <form action="{{ route('admin.experiences.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Experience</button>
        </form>
    </div>
@endsection
