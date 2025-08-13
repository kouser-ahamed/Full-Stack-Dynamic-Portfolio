@extends('admin.layout')

@push('style')
    <title>Edit Personal Info</title>
    <style>
        .personal-form-container {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(34,45,50,0.10);
            padding: 40px 32px;
            margin: 48px auto 100px auto;
            max-width: 600px;
        }
        .personal-form-container h2 {
            font-weight: 700;
            color: #222d32;
            letter-spacing: 1px;
            margin-bottom: 24px;
        }
        .personal-form-group {
            margin-bottom: 18px;
        }
        .personal-form-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 6px;
            color: #222d32;
        }
        .personal-form-group input, .personal-form-group textarea {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #eaeaea;
            border-radius: 6px;
            font-size: 1rem;
            background: #f8fafc;
            color: #222d32;
            transition: border 0.2s;
        }
        .personal-form-group input:focus, .personal-form-group textarea:focus {
            border: 1.5px solid #007bff;
            outline: none;
        }
        .personal-form-btn {
            background: #222d32;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 10px 28px;
            font-size: 1.08rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }
        .personal-form-btn:hover {
            background: #007bff;
        }
    </style>
@endpush

@section('main-content')
    <div class="personal-form-container">
        <h2>Edit Personal Info</h2>
        <form action="{{ route('admin.personal.update', $personal->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="personal-form-group">
                <label>Full Name</label>
                <input type="text" name="full_name" value="{{ $personal->full_name }}" required>
            </div>
            <div class="personal-form-group">
                <label>Email</label>
                <input type="email" name="email" value="{{ $personal->email }}" required>
            </div>
            <div class="personal-form-group">
                <label>Phone</label>
                <input type="text" name="phone" value="{{ $personal->phone }}">
            </div>
            <div class="personal-form-group">
                <label>Address</label>
                <input type="text" name="address" value="{{ $personal->address }}">
            </div>
            <div class="personal-form-group">
                <label>Date of Birth</label>
                <input type="date" name="dob" value="{{ $personal->dob }}">
            </div>
            <div class="personal-form-group">
                <label>Bio</label>
                <textarea name="bio" rows="3">{{ $personal->bio }}</textarea>
            </div>
            <div class="personal-form-group">
                <label>Website</label>
                <input type="url" name="website" value="{{ $personal->website }}">
            </div>
            <div class="personal-form-group">
                <label>LinkedIn</label>
                <input type="url" name="linkedin" value="{{ $personal->linkedin }}">
            </div>
            <div class="personal-form-group">
                <label>GitHub</label>
                <input type="url" name="github" value="{{ $personal->github }}">
            </div>
            <div class="personal-form-group">
                <label>Twitter</label>
                <input type="url" name="twitter" value="{{ $personal->twitter }}">
            </div>
            <button type="submit" class="personal-form-btn">Update Info</button>
        </form>
    </div>
@endsection
