@extends('admin.layout')

@push('style')
    <title>Edit Personal Info</title>
    <style>
        .personal-form-container {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 8px 32px rgba(34,45,50,0.13);
            padding: 48px 40px 36px 40px;
            margin: 48px auto 100px auto;
            max-width: 700px;
            position: relative;
        }
        .personal-avatar {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #007bff33;
            margin: 0 auto 18px auto;
            display: block;
            box-shadow: 0 2px 8px #007bff22;
        }
        .personal-form-container h2 {
            font-weight: 800;
            color: #007bff;
            letter-spacing: 1px;
            margin-bottom: 10px;
            text-align: center;
        }
        .personal-form-container .subtitle {
            color: #888;
            font-size: 1.08rem;
            text-align: center;
            margin-bottom: 28px;
        }
        .personal-form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px 28px;
            margin-bottom: 18px;
        }
        .personal-form-group {
            margin-bottom: 0;
        }
        .personal-form-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 6px;
            color: #222d32;
            letter-spacing: 0.5px;
        }
        .personal-form-group input, .personal-form-group textarea {
            width: 100%;
            padding: 11px 14px;
            border: 1.5px solid #eaeaea;
            border-radius: 7px;
            font-size: 1.04rem;
            background: #f8fafc;
            color: #222d32;
            transition: border 0.2s, box-shadow 0.2s;
            box-shadow: 0 1px 2px #007bff11;
        }
        .personal-form-group input:focus, .personal-form-group textarea:focus {
            border: 1.5px solid #007bff;
            outline: none;
            box-shadow: 0 0 0 2px #007bff22;
        }
        .personal-form-group textarea {
            min-height: 70px;
            resize: vertical;
        }
        .personal-form-btn {
            background: linear-gradient(90deg, #007bff 60%, #0056b3 100%);
            color: #fff;
            border: none;
            border-radius: 7px;
            padding: 12px 36px;
            font-size: 1.13rem;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.2s, box-shadow 0.2s;
            margin: 30px auto 0 auto;
            display: block;
            box-shadow: 0 2px 8px #007bff22;
        }
        .personal-form-btn:hover {
            background: linear-gradient(90deg, #0056b3 60%, #007bff 100%);
            box-shadow: 0 4px 16px #007bff33;
        }
        @media (max-width: 700px) {
            .personal-form-container {
                padding: 24px 8px 18px 8px;
            }
            .personal-form-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endpush

@section('main-content')
    <div class="personal-form-container">
        <img src="https://ui-avatars.com/api/?name={{ urlencode($personal->full_name ?? 'User') }}&background=007bff&color=fff&size=128" class="personal-avatar" alt="Profile Avatar">
        <h2>Edit Personal Info</h2>
        <div class="subtitle">Update your personal details below</div>
        <form action="{{ route('admin.personal.update', $personal->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="personal-form-grid">
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
            </div>
            <div class="personal-form-group" style="grid-column: 1 / -1;">
                <label>Bio</label>
                <textarea name="bio" rows="3">{{ $personal->bio }}</textarea>
            </div>
            <button type="submit" class="personal-form-btn">Update Info</button>
        </form>
    </div>
@endsection
