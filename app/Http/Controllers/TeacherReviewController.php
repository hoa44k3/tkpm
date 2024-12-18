<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeacherReview;
use App\Models\Courses;
class TeacherReviewController extends Controller
{
    

    public function index(Request $request)
    {
        $course_id = $request->query('course'); // Lấy course_id từ query string

        if (!$course_id) {
            abort(404, 'Course not found.');
        }

        $courses = Courses::findOrFail($course_id); // Lấy thông tin khóa học
        $reviews = TeacherReview::where('courses_id', $course_id)->get(); // Lấy đánh giá theo course_id

        return view('reviews.index', compact('reviews', 'courses'));
    }

    
    public function create(Request $request)
    {
        $course_id = $request->query('course'); // Lấy course_id từ query string

        if (!$course_id) {
            abort(404, 'Course not found.');
        }

        $courses = Courses::findOrFail($course_id);
        return view('reviews.create', compact('courses'));
    }

    public function store(Request $request)
{
    $course_id = $request->query('course'); // Lấy course_id từ query string

    if (!$course_id) {
        abort(404, 'Course not found.');
    }

    $request->validate([
        'student_name' => 'required|string|max:255',
        'rating' => 'required|integer|min:1|max:5',
        'review' => 'required|string',
    ]);

    TeacherReview::create([
        'courses_id' => $course_id,
        'student_name' => $request->student_name,
        'rating' => $request->rating,
        'review' => $request->review,
    ]);

    return redirect()->route('reviews.index', ['course' => $course_id])
                     ->with('success', 'Review added successfully.');
}


public function edit($review_id)
{
    $review = TeacherReview::findOrFail($review_id);
    $courses = Courses::findOrFail($review->courses_id);

    return view('reviews.edit', compact('review', 'courses'));
}


public function update(Request $request, $review_id)
{
    $review = TeacherReview::findOrFail($review_id);

    $request->validate([
        'student_name' => 'required|string|max:255',
        'rating' => 'required|integer|min:1|max:5',
        'review' => 'required|string',
    ]);

    $review->update([
        'student_name' => $request->student_name,
        'rating' => $request->rating,
        'review' => $request->review,
    ]);

    return redirect()->route('reviews.index', ['course' => $review->courses_id])
                     ->with('success', 'Review updated successfully.');
}


public function destroy($review_id)
{
    $review = TeacherReview::findOrFail($review_id);
    $course_id = $review->courses_id;

    $review->delete();

    return redirect()->route('reviews.index', ['course' => $course_id])
                     ->with('success', 'Review deleted successfully.');
}

}
