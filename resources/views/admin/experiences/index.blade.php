@extends('admin.layout')

@push('style')
    <title>Admin - Experiences</title>
@endpush

@section('main-content')
    <div class="container">
        <h2>All Experiences</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                </tr>
            </thead>
            <tbody>
                @foreach($experiences as $experience)
                    <tr>
                        <td>{{ $experience->id }}</td>
                        <td>{{ $experience->title }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
