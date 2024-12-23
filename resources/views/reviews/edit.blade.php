@extends('admin.master')

@section('title', 'Edit Review')

@section('body')
<div class="card">
    <div class="card-header">
        <h4>Edit Review</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('reviews.update', $review->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="teacher_id">Teacher</label>
                <select name="teacher_id" id="teacher_id" class="form-control">
                    @foreach ($teachers as $teacher)
                        <option value="{{ $teacher->id }}" {{ $teacher->id == $review->teacher_id ? 'selected' : '' }}>{{ $teacher->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="review">Review</label>
                <textarea name="review" id="review" class="form-control" rows="4">{{ $review->comment }}</textarea>
            </div>
            <div class="form-group">
                <label for="rating">Rating</label>
                <input type="number" name="rating" id="rating" class="form-control" step="0.1" min="0" max="5" value="{{ $review->rating }}">
            </div>
            <div class="form-group">
                <label for="user_id">Reviewer Name</label>
                <input type="text" name="user_id" id="user_id" class="form-control" value="{{ $review->user ? $review->user->name : 'Anonymous' }}" disabled>
                <!-- Disable input for reviewer name as it is pulled from the User model -->
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</div>
@endsection
