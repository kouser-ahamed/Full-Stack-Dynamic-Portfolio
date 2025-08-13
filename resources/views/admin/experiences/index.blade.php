@extends('admin.layout')

@push('style')
    <title>Admin - Add Experiences</title>
    <style>
        .exp-form-container {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(34,45,50,0.10);
            padding: 40px 32px;
            margin: 48px auto 100px auto;
            max-width: 600px;
        }
        .exp-form-container h2 {
            font-weight: 700;
            color: #222d32;
            letter-spacing: 1px;
            margin-bottom: 24px;
        }
        .exp-form-group {
            margin-bottom: 18px;
        }
        .exp-form-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 6px;
            color: #222d32;
        }
        .exp-form-group input, .exp-form-group textarea {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #eaeaea;
            border-radius: 6px;
            font-size: 1rem;
            background: #f8fafc;
            color: #222d32;
            transition: border 0.2s;
        }
        .exp-form-group input:focus, .exp-form-group textarea:focus {
            border: 1.5px solid #007bff;
            outline: none;
        }
        .exp-form-btn {
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
        .exp-form-btn:hover {
            background: #007bff;
        }
    </style>
@endpush

@section('main-content')
    <div class="exp-form-container">
        <h2>Add Experiences</h2>
        <form action="{{ route('admin.experiences.store') }}" method="POST" id="experiencesForm">
            @csrf
            <div id="experiencesFields">
                <div class="exp-form-group-set">
                    <div class="exp-form-group">
                        <label>Title</label>
                        <input type="text" name="title[]" required>
                    </div>
                    <div class="exp-form-group">
                        <label>Company</label>
                        <input type="text" name="company[]" required>
                    </div>
                    <div class="exp-form-group">
                        <label>Location</label>
                        <input type="text" name="location[]">
                    </div>
                    <div class="exp-form-group">
                        <label>Start Date</label>
                        <input type="date" name="start_date[]" required>
                    </div>
                    <div class="exp-form-group">
                        <label>End Date</label>
                        <input type="date" name="end_date[]">
                    </div>
                    <div class="exp-form-group">
                        <label>Description</label>
                        <textarea name="description[]" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <button type="button" class="exp-form-btn" style="background:#007bff;margin-bottom:18px;" onclick="addExperienceField()">+ Add More</button>
            <button type="submit" class="exp-form-btn">Add Experiences</button>
        </form>
    </div>
    <script>
        function addExperienceField() {
            const fields = document.getElementById('experiencesFields');
            const set = document.createElement('div');
            set.className = 'exp-form-group-set';
            set.innerHTML = `
                <div class=\"exp-form-group\">
                    <label>Title</label>
                    <input type=\"text\" name=\"title[]\" required>
                </div>
                <div class=\"exp-form-group\">
                    <label>Company</label>
                    <input type=\"text\" name=\"company[]\" required>
                </div>
                <div class=\"exp-form-group\">
                    <label>Location</label>
                    <input type=\"text\" name=\"location[]\">
                </div>
                <div class=\"exp-form-group\">
                    <label>Start Date</label>
                    <input type=\"date\" name=\"start_date[]\" required>
                </div>
                <div class=\"exp-form-group\">
                    <label>End Date</label>
                    <input type=\"date\" name=\"end_date[]\">
                </div>
                <div class=\"exp-form-group\">
                    <label>Description</label>
                    <textarea name=\"description[]\" rows=\"3\"></textarea>
                </div>
            `;
            fields.appendChild(set);
        }
    </script>
@endsection
