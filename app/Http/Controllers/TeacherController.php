<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    function showView(){

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        $teacher = Teacher::findOrFail($id);

        return view('teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $teacher = Teacher::findOrFail($id);
        return view('teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required',
            'department' => 'required|string|max:255'
            // Add more validation rules as needed
        ]);

        $teacher = Teacher::findOrFail($id);

        $teacher->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'department' => $request->department,
            // Add more fields as needed
        ]);

        return redirect()->route('teachers.index')
            ->with('success', 'Teacher updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return redirect()->route('teachers.index')
            ->with('success', 'Teacher deleted successfully.');
    }
}
