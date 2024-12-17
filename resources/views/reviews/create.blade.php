@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Review for {{ $courses->course_title }}</h1>
        
        <form action="{{ route('reviews.store', ['course' => $courses->id]) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="student_name">Student Name</label>
                <input type="text" name="student_name" id="student_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="rating">Rating (1 to 5)</label>
                <input type="number" name="rating" id="rating" class="form-control" min="1" max="5" required>
            </div>
            <div class="form-group">
                <label for="review">Review</label>
                <textarea name="review" id="review" class="form-control" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-success mt-3">Submit Review</button>
        </form>
    </div>
@endsection
