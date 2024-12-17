<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
class CoursesController extends Controller
{
    public function index()
    {
        $courses = Courses::all(); // Lấy tất cả khóa học
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'teacher_name' => 'required|string|max:255',
            'teacher_title' => 'required|string|max:255',
            'age_group' => 'required|string|max:255',
            'time' => 'required|string|max:255',
            'class_size' => 'required|integer',
            'fee' => 'required|numeric',
            'course_title' => 'required|string|max:255',
            'description' => 'required|string',
            'rating' => 'nullable|numeric',
        ]);
        
        Courses::create($request->all());

        return redirect()->route('courses.index')->with('success', 'Course added successfully.');
    }

    public function edit($id)
    {
        $course = Courses::findOrFail($id);
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'teacher_name' => 'required|string|max:255',
            'teacher_title' => 'required|string|max:255',
            'age_group' => 'required|string|max:255',
            'time' => 'required|string|max:255',
            'class_size' => 'required|integer',
            'fee' => 'required|numeric',
            'course_title' => 'required|string|max:255',
            'description' => 'required|string',
            'rating' => 'nullable|numeric',
        ]);

        $course = Courses::findOrFail($id);
        $course->update($request->all());

        return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
    }

    public function destroy($id)
    {
        $course = Courses::findOrFail($id);
        $course->delete();

        return response()->json(['success' => 'Course deleted successfully']);
    }
}
