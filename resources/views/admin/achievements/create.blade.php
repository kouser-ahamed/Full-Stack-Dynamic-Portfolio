@extends('admin.layout')

@push('style')
    <title>Admin - Add Achievement</title>
@endpush

@section('main-content')
    <div class="container">
        <h2>Add Achievement</h2>
        <form action="{{ route('admin.achievements.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Achievement</button>
        </form>
    </div>
@endsection
