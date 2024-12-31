<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use Illuminate\Support\Facades\Storage;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = Courses::all(); 
        foreach ($courses as $course) {
            $averageRating = $course->reviews()->avg('rating');
            $course->average_rating = $averageRating ?: 'Chưa đánh giá';
        }
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
            'location' => 'required|string|max:255',
            'teacher_avatar' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', 
            'background_image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', 
        ]);
        
        // Xử lý ảnh đại diện
        $teacherAvatar = null;
        if ($request->hasFile('teacher_avatar')) {
            $teacherAvatar = $request->file('teacher_avatar')->store('teacheravatars', 'public');
        }

        // Xử lý ảnh nền
        $backgroundImage = null;
        if ($request->hasFile('background_image')) {
            $backgroundImage = $request->file('background_image')->store('backgrounds', 'public');
        }

        // Lưu khóa học
        Courses::create([
            'teacher_name' => $request->teacher_name,
            'teacher_title' => $request->teacher_title,
            'age_group' => $request->age_group,
            'time' => $request->time,
            'class_size' => $request->class_size,
            'fee' => $request->fee,
            'course_title' => $request->course_title,
            'description' => $request->description,
            'rating' => $request->rating,
            'location' => $request->location,
           'teacher_avatar' => $teacherAvatar, 
             'background_image' => $backgroundImage, 
        ]);

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
            'location' => 'required|string|max:255',
            'teacher_avatar' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'background_image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $course = Courses::findOrFail($id);

        // Xử lý ảnh đại diện
        if ($request->hasFile('teacher_avatar')) {
            // Xóa ảnh cũ nếu có
            if ($course->teacher_avatar) {
                Storage::disk('public')->delete($course->teacher_avatar);
            }
            $course->teacher_avatar = $request->file('teacher_avatar')->store('teacheravatars', 'public');
        }

        // Xử lý ảnh nền
        if ($request->hasFile('background_image')) {
            // Xóa ảnh cũ nếu có
            if ($course->background_image) {
                Storage::disk('public')->delete($course->background_image);
            }
            $course->background_image = $request->file('background_image')->store('backgrounds', 'public');
        }

        // Cập nhật khóa học
        $course->update([
            'teacher_name' => $request->teacher_name,
            'teacher_title' => $request->teacher_title,
            'age_group' => $request->age_group,
            'time' => $request->time,
            'class_size' => $request->class_size,
            'fee' => $request->fee,
            'course_title' => $request->course_title,
            'description' => $request->description,
            'rating' => $request->rating,
            'location' => $request->location,
            // 'teacher_avatar' => $request->teacherAvatar,
            // 'background_image' => $request->backgroundImage,
           'teacher_avatar' => $course->teacher_avatar, // Sửa lại
            'background_image' => $course->background_image,
        ]);

        return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
    }

    public function destroy($id)
    {
        $course = Courses::findOrFail($id);

        // Xóa ảnh đại diện và ảnh nền nếu có
        if ($course->teacher_avatar) {
            Storage::disk('public')->delete($course->teacher_avatar);
        }

        if ($course->background_image) {
            Storage::disk('public')->delete($course->background_image);
        }

        $course->delete();

        return response()->json(['success' => 'Course deleted successfully']);
    }
}
