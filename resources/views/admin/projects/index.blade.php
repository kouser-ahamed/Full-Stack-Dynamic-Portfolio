@extends('admin.layout')

@push('style')
    <title>Admin - Add Projects</title>
    <style>
        .proj-form-container {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(34,45,50,0.10);
            padding: 40px 32px;
            margin: 48px auto 100px auto;
            max-width: 600px;
        }
        .proj-form-container h2 {
            font-weight: 700;
            color: #222d32;
            letter-spacing: 1px;
            margin-bottom: 24px;
        }
        .proj-form-group {
            margin-bottom: 18px;
        }
        .proj-form-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 6px;
            color: #222d32;
        }
        .proj-form-group input, .proj-form-group textarea {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #eaeaea;
            border-radius: 6px;
            font-size: 1rem;
            background: #f8fafc;
            color: #222d32;
            transition: border 0.2s;
        }
        .proj-form-group input:focus, .proj-form-group textarea:focus {
            border: 1.5px solid #007bff;
            outline: none;
        }
        .proj-form-btn {
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
        .proj-form-btn:hover {
            background: #007bff;
        }
    </style>
@endpush

@section('main-content')
    <div class="proj-form-container">
        <h2>Add Projects</h2>
        <form action="{{ route('admin.projects.store') }}" method="POST" id="projectsForm">
            @csrf
            <div id="projectsFields">
                <div class="proj-form-group-set">
                    <div class="proj-form-group">
                        <label>Title</label>
                        <input type="text" name="title[]" required>
                    </div>
                    <div class="proj-form-group">
                        <label>Description</label>
                        <textarea name="description[]" rows="3"></textarea>
                    </div>
                    <div class="proj-form-group">
                        <label>Link</label>
                        <input type="url" name="link[]">
                    </div>
                    <div class="proj-form-group">
                        <label>Image URL</label>
                        <input type="url" name="image[]">
                    </div>
                </div>
            </div>
            <button type="button" class="proj-form-btn" style="background:#007bff;margin-bottom:18px;" onclick="addProjectField()">+ Add More</button>
            <button type="submit" class="proj-form-btn">Add Projects</button>
        </form>
    </div>
    <script>
        function addProjectField() {
            const fields = document.getElementById('projectsFields');
            const set = document.createElement('div');
            set.className = 'proj-form-group-set';
            set.innerHTML = `
                <div class=\"proj-form-group\">
                    <label>Title</label>
                    <input type=\"text\" name=\"title[]\" required>
                </div>
                <div class=\"proj-form-group\">
                    <label>Description</label>
                    <textarea name=\"description[]\" rows=\"3\"></textarea>
                </div>
                <div class=\"proj-form-group\">
                    <label>Link</label>
                    <input type=\"url\" name=\"link[]\">
                </div>
                <div class=\"proj-form-group\">
                    <label>Image URL</label>
                    <input type=\"url\" name=\"image[]\">
                </div>
            `;
            fields.appendChild(set);
        }
    </script>
@endsection
