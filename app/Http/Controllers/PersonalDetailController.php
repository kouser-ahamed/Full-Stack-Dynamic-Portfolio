<?php

namespace App\Http\Controllers;

use App\Models\PersonalDetail;
use Illuminate\Http\Request;

class PersonalDetailController extends Controller
{
    public function index()
    {
        $personal = PersonalDetail::all();
        return view('admin.personal.index', compact('personal'));
    }

    public function create()
    {
        return view('admin.personal.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:30',
            'address' => 'nullable|string|max:255',
            'dob' => 'nullable|date',
            'bio' => 'nullable|string|max:1000',
            'website' => 'nullable|url|max:255',
            'linkedin' => 'nullable|url|max:255',
            'github' => 'nullable|url|max:255',
            'twitter' => 'nullable|url|max:255',
        ]);
        PersonalDetail::create($data);
        return redirect()->route('admin.personal.index')->with('success', 'Personal info added!');
    }

    public function edit($id)
    {
        $personal = PersonalDetail::findOrFail($id);
        return view('admin.personal.edit', compact('personal'));
    }

    public function update(Request $request, $id)
    {
        $personal = PersonalDetail::findOrFail($id);
        $data = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:30',
            'address' => 'nullable|string|max:255',
            'dob' => 'nullable|date',
            'bio' => 'nullable|string|max:1000',
            'website' => 'nullable|url|max:255',
            'linkedin' => 'nullable|url|max:255',
            'github' => 'nullable|url|max:255',
            'twitter' => 'nullable|url|max:255',
        ]);
        $personal->update($data);
        return redirect()->route('admin.personal.index')->with('success', 'Personal info updated!');
    }

    public function destroy($id)
    {
        $personal = PersonalDetail::findOrFail($id);
        $personal->delete();
        return redirect()->route('admin.personal.index')->with('success', 'Personal info deleted!');
    }
}
