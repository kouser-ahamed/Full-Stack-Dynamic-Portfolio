@extends('admin.layout')

@push('style')
    <title>Admin - Add Skills</title>
    <style>
        .skill-form-container {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(34,45,50,0.10);
            padding: 40px 32px;
            margin: 48px auto 100px auto;
            max-width: 600px;
        }
        .skill-form-container h2 {
            font-weight: 700;
            color: #222d32;
            letter-spacing: 1px;
            margin-bottom: 24px;
        }
        .skill-form-group {
            margin-bottom: 18px;
        }
        .skill-form-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 6px;
            color: #222d32;
        }
        .skill-form-group input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #eaeaea;
            border-radius: 6px;
            font-size: 1rem;
            background: #f8fafc;
            color: #222d32;
            transition: border 0.2s;
        }
        .skill-form-group input:focus {
            border: 1.5px solid #007bff;
            outline: none;
        }
        .skill-form-btn {
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
        .skill-form-btn:hover {
            background: #007bff;
        }
    </style>
@endpush

@section('main-content')
    <div class="skill-form-container">
        <h2>Add Skills</h2>
        <form action="{{ route('admin.skills.store') }}" method="POST" id="skillsForm">
            @csrf
            <div id="skillsFields">
                <div class="skill-form-group-set">
                    <div class="skill-form-group">
                        <label>Skill Name</label>
                        <input type="text" name="name[]" required>
                    </div>
                    <div class="skill-form-group">
                        <label>Skill Level</label>
                        <select name="level[]" required>
                            <option value="">Select Level</option>
                            <option value="Beginner">Beginner</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Advanced">Advanced</option>
                            <option value="Expert">Expert</option>
                        </select>
                    </div>
                    <div class="skill-form-group">
                        <label>Description</label>
                        <input type="text" name="description[]">
                    </div>
                </div>
            </div>
            <button type="button" class="skill-form-btn" style="background:#007bff;margin-bottom:18px;" onclick="addSkillField()">+ Add More</button>
            <button type="submit" class="skill-form-btn">Add Skills</button>
        </form>
    </div>
    <script>
        function addSkillField() {
            const fields = document.getElementById('skillsFields');
            const set = document.createElement('div');
            set.className = 'skill-form-group-set';
            set.innerHTML = `
                <div class=\"skill-form-group\">
                    <label>Skill Name</label>
                    <input type=\"text\" name=\"name[]\" required>
                </div>
                <div class=\"skill-form-group\">
                    <label>Skill Level</label>
                    <select name=\"level[]\" required>
                        <option value=\"\">Select Level</option>
                        <option value=\"Beginner\">Beginner</option>
                        <option value=\"Intermediate\">Intermediate</option>
                        <option value=\"Advanced\">Advanced</option>
                        <option value=\"Expert\">Expert</option>
                    </select>
                </div>
                <div class=\"skill-form-group\">
                    <label>Description</label>
                    <input type=\"text\" name=\"description[]\">
                </div>
            `;
            fields.appendChild(set);
        }
    </script>
@endsection
