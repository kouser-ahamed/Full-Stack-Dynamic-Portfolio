@extends('admin.layout')

@push('style')
    <title>Admin - Add Education</title>
@endpush

@section('main-content')
    <style>
        .edu-form-container {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(34,45,50,0.10);
            padding: 40px 32px;
            margin: 48px auto 100px auto;
            max-width: 600px;
        }
        .edu-form-container h2 {
            font-weight: 700;
            color: #222d32;
            letter-spacing: 1px;
            margin-bottom: 24px;
        }
        .edu-form-group {
            margin-bottom: 18px;
        }
        .edu-form-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 6px;
            color: #222d32;
        }
        .edu-form-group input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #eaeaea;
            border-radius: 6px;
            font-size: 1rem;
            background: #f8fafc;
            color: #222d32;
            transition: border 0.2s;
        }
        .edu-form-group input:focus {
            border: 1.5px solid #007bff;
            outline: none;
        }
        .edu-form-btn {
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
        .edu-form-btn:hover {
            background: #007bff;
        }
    </style>
    <div class="edu-form-container">
        <h2>Add Education</h2>
        <form action="{{ route('admin.education.store') }}" method="POST">
            @csrf
            <div class="edu-form-group">
                <label>Degree</label>
                <input type="text" name="degree" required>
            </div>
            <div class="edu-form-group">
                <label>Institute</label>
                <input type="text" name="institute" required>
            </div>
            <div class="edu-form-group">
                <label>Enrolled Year</label>
                <input type="text" name="enrolled_year" required>
            </div>
            <div class="edu-form-group">
                <label>Passing Year</label>
                <input type="text" name="passing_year" required>
            </div>
            <div class="edu-form-group">
                <label>Grade</label>
                <input type="text" name="grade">
            </div>
            <button type="submit" class="edu-form-btn">Add Education</button>
        </form>
    </div>
@endsection
