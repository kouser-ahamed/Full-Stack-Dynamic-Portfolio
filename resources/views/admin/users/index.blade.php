@extends('admin.layout')

@push('style')
    <title>Admin - Users</title>
    <style>
        .user-table-container {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(34,45,50,0.10);
            padding: 40px 32px;
            margin: 48px auto 100px auto;
            max-width: 1100px;
        }
        .user-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            font-size: 1.05rem;
            background: #f8fafc;
            border-radius: 12px;
            overflow: hidden;
        }
        .user-table th, .user-table td {
            padding: 16px 14px;
            border-bottom: 1px solid #eaeaea;
            text-align: left;
        }
        .user-table th {
            background: linear-gradient(90deg, #222d32 80%, #007bff 100%);
            color: #fff;
            font-weight: 700;
            letter-spacing: 0.5px;
        }
        .user-table tr:last-child td {
            border-bottom: none;
        }
        .user-table tr:hover {
            background: #eaf1fb;
            transition: background 0.2s;
        }
        .user-table td {
            color: #222d32;
        }
        .user-avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #007bff;
            margin-right: 10px;
        }
        .user-name {
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 500;
        }
        .user-action {
            display: flex;
            gap: 10px;
        }
        .user-action a, .user-action form button {
            background: #222d32;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 7px 18px;
            text-decoration: none;
            font-size: 0.98rem;
            transition: background 0.2s;
            cursor: pointer;
        }
        .user-action a:hover, .user-action form button:hover {
            background: #007bff;
        }
        .user-action form button {
            background: #d9534f;
        }
        .user-action form button:hover {
            background: #c9302c;
        }
        @media (max-width: 700px) {
            .user-table-container { padding: 10px 2px; }
            .user-table th, .user-table td { padding: 8px 4px; font-size: 0.95rem; }
        }
    </style>
@endpush

@section('main-content')
    <div class="user-table-container">
        <h2 style="margin-bottom: 24px; font-weight: 700; color: #222d32; letter-spacing: 1px;">All Users</h2>
        <table class="user-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td class="user-name">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=007bff&color=fff&size=64" alt="avatar" class="user-avatar">
                            {{ $user->name }}
                        </td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at ? $user->created_at->format('Y-m-d') : '' }}</td>
                        <td>{{ $user->updated_at ? $user->updated_at->format('Y-m-d') : '' }}</td>
                        <td class="user-action">
                            <a href="{{ route('admin.users.edit', $user->id) }}">Edit</a>
                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
