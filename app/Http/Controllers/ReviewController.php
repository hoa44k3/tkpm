<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Teacher;
class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::with('teacher', 'user')->get(); 
        return view('reviews.index', compact('reviews'));
    }

    public function create()
    {
        $teachers = Teacher::all();
        return view('reviews.create', compact('teachers'));
    }

    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'teacher_id' => 'required|exists:teachers,id',
    //         'review' => 'required|string|max:1000',
    //         'rating' => 'required|numeric|min:0|max:5',
    //         // 'reviewer_name' => 'required|string|max:255',
    //         'user_id' => 'required|exists:users,id',
    //     ]);
    //     dd($validated);
    //     Review::create($validated);
      
    //     return redirect()->route('reviews.index')->with('success', 'Review added successfully!');
    // }
    public function store(Request $request)
    {
        $request->validate([
            'teacher_id' => 'required|exists:teachers,id',
            'review' => 'nullable|string',
            'rating' => 'required|numeric|min:0|max:5',
        ]);
    
        Review::create([
            'teacher_id' => $request->teacher_id,
            'user_id' => auth()->user()->id, // Lấy user_id từ người dùng đang đăng nhập
            'rating' => $request->rating,
            'comment' => $request->review,
        ]);
    
        return redirect()->route('reviews.index')->with('success', 'Review added successfully.');
    }
    public function edit($id)
    {
        $review = Review::findOrFail($id);
        $teachers = Teacher::all(); 
        return view('reviews.edit', compact('review', 'teachers'));
    }

    // public function update(Request $request, Review $review)
    // {
    //     $validated = $request->validate([
    //         'teacher_id' => 'required|exists:teachers,id',
    //         'review' => 'required|string|max:1000',
    //         'rating' => 'required|numeric|min:0|max:5',
    //         // 'reviewer_name' => 'required|string|max:255',
    //         'user_id' => 'required|exists:users,id',
    //     ]);

    //     $review->update($validated);
    //     return redirect()->route('reviews.index')->with('success', 'Review updated successfully!');
    // }
    public function update(Request $request, $id)
{
    $request->validate([
        'teacher_id' => 'required|exists:teachers,id',
        'review' => 'nullable|string',
        'rating' => 'required|numeric|min:0|max:5',
    ]);

    $review = Review::findOrFail($id);
    $review->update([
        'teacher_id' => $request->teacher_id,
        'rating' => $request->rating,
        'comment' => $request->review,
    ]);

    return redirect()->route('reviews.index')->with('success', 'Review updated successfully.');
}

    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->route('reviews.index')->with('success', 'Review deleted successfully!');
    }
}
