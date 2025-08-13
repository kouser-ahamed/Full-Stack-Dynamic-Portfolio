{{-- @extends('admin.layout')

@push('style')
    <title>Admin - Dashboard</title>
@endpush

@section('main-content')
    <div class="overview">
        
    </div>
@endsection --}}


@extends('admin.layout')
@push('style')
    <title>Admin - Dashboard</title>
@endpush

@section('main-content')
    <div style="margin-left: 220px; padding: 40px; min-height: 80vh; background: #f4f6f9; display: flex; align-items: center; justify-content: center;">
        <div style="background: #fff; border-radius: 16px; box-shadow: 0 4px 24px rgba(34,45,50,0.10); padding: 48px 32px; max-width: 600px; width: 100%; text-align: center;">
            <h2 style="font-weight: 700; color: #222d32; margin-bottom: 18px;">Welcome to the Admin Dashboard</h2>
            <p style="font-size: 1.2rem; color: #555;">You are logged in as <b>{{ Auth::user()->name }}</b>.</p>
        </div>
    </div>
@endsection