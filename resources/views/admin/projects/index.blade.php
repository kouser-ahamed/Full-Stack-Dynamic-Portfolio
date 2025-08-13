@extends('admin.layout')

@push('style')
    <title>Admin - Projects</title>
@endpush

@section('main-content')
    <div class="container">
        <h2>All Projects</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->title }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
