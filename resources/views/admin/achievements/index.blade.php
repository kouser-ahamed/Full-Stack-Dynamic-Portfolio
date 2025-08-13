@extends('admin.layout')

@push('style')
    <title>Admin - Add Achievement</title>
    <style>
        .ach-form-container {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(34,45,50,0.10);
            padding: 40px 32px;
            margin: 48px auto 100px auto;
            max-width: 600px;
        }
        .ach-form-container h2 {
            font-weight: 700;
            color: #222d32;
            letter-spacing: 1px;
            margin-bottom: 24px;
        }
        .ach-form-group {
            margin-bottom: 18px;
        }
        .ach-form-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 6px;
            color: #222d32;
        }
        .ach-form-group input, .ach-form-group textarea {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #eaeaea;
            border-radius: 6px;
            font-size: 1rem;
            background: #f8fafc;
            color: #222d32;
            transition: border 0.2s;
        }
        .ach-form-group input:focus, .ach-form-group textarea:focus {
            border: 1.5px solid #007bff;
            outline: none;
        }
        .ach-form-btn {
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
        .ach-form-btn:hover {
            background: #007bff;
        }
    </style>
@endpush

@section('main-content')
    <div class="ach-form-container">
        <h2>Add Achievements</h2>
        <form action="{{ route('admin.achievements.store') }}" method="POST" id="achievementsForm">
            @csrf
            <div id="achievementsFields">
                <div class="ach-form-group-set">
                    <div class="ach-form-group">
                        <label>Title</label>
                        <input type="text" name="title[]" required>
                    </div>
                    <div class="ach-form-group">
                        <label>Description</label>
                        <textarea name="description[]" rows="4"></textarea>
                    </div>
                </div>
            </div>
            <button type="button" class="ach-form-btn" style="background:#007bff;margin-bottom:18px;" onclick="addAchievementField()">+ Add More</button>
            <button type="submit" class="ach-form-btn">Add Achievements</button>
        </form>
    </div>
    <script>
        function addAchievementField() {
            const fields = document.getElementById('achievementsFields');
            const set = document.createElement('div');
            set.className = 'ach-form-group-set';
            set.innerHTML = `
                <div class="ach-form-group">
                    <label>Title</label>
                    <input type="text" name="title[]" required>
                </div>
                <div class="ach-form-group">
                    <label>Description</label>
                    <textarea name="description[]" rows="4"></textarea>
                </div>
            `;
            fields.appendChild(set);
        }
    </script>
@endsection
