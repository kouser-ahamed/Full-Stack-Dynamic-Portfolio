@extends('admin.layout')

@push('style')
    <title>Admin - Personal Info</title>
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
        .personal-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 32px;
        }
        .personal-table th, .personal-table td {
            border: 1px solid #eaeaea;
            padding: 10px 12px;
            text-align: left;
        }
        .personal-table th {
            background: #f4f6f9;
            font-weight: 700;
        }
        .personal-table td {
            background: #fff;
        }
        .action-btns a, .action-btns form {
            display: inline-block;
        }
        .action-btns button, .action-btns a {
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 6px 14px;
            margin-right: 6px;
            font-size: 0.98rem;
            cursor: pointer;
            text-decoration: none;
        }
        .action-btns button.delete {
            background: #d9534f;
        }
    </style>
@endpush

@section('main-content')
    <div class="personal-form-container">
        <h2>Personal Info</h2>
        <a href="{{ route('admin.personal.create') }}" class="personal-form-btn" style="margin-bottom: 18px; display:inline-block;">+ Add Personal Info</a>
        <table class="personal-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>DOB</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($personal as $info)
                    <tr>
                        <td>{{ $info->full_name }}</td>
                        <td>{{ $info->email }}</td>
                        <td>{{ $info->phone }}</td>
                        <td>{{ $info->address }}</td>
                        <td>{{ $info->dob }}</td>
                        <td class="action-btns">
                            <a href="{{ route('admin.personal.edit', $info->id) }}">Edit</a>
                            <form action="{{ route('admin.personal.destroy', $info->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
