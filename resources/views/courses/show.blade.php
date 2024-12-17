<!-- courses/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="course-details">
        <h1>{{ $course->course_title }}</h1>
        <p>{{ $course->description }}</p>

        <!-- Form để thêm đánh giá -->
        <form action="{{ route('reviews.store', $course->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="student_name">Your Name</label>
                <input type="text" name="student_name" id="student_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="rating">Rating</label>
                <select name="rating" id="rating" class="form-control" required>
                    <option value="1">1 Star</option>
                    <option value="2">2 Stars</option>
                    <option value="3">3 Stars</option>
                    <option value="4">4 Stars</option>
                    <option value="5">5 Stars</option>
                </select>
            </div>
            <div class="form-group">
                <label for="review">Review</label>
                <textarea name="review" id="review" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Review</button>
        </form>

        <!-- Hiển thị các đánh giá đã có -->
        <h3>Reviews</h3>
        @foreach ($course->teacherReviews as $review)
            <div class="review">
                <h5>{{ $review->student_name }} ({{ $review->rating }} Stars)</h5>
                <p>{{ $review->review }}</p>
                <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" class="d-inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection
