@extends('admin.layout')

@push('style')
    <title>Admin - Add Skill</title>
@endpush

@section('main-content')
    <div class="container">
        <h2>Add Skill</h2>
        <form action="{{ route('admin.skills.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Skill</button>
        </form>
    </div>
@endsection
