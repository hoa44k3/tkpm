@extends('admin.master')

@section('title', 'Add Review')

@section('body')
<div class="card">
    <div class="card-header">
        <h4>Add Review</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('reviews.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="teacher_id">Teacher</label>
                <select name="teacher_id" id="teacher_id" class="form-control">
                    @foreach ($teachers as $teacher)
                        <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="review">Review</label>
                <textarea name="review" id="review" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="rating">Rating</label>
                <input type="number" name="rating" id="rating" class="form-control" step="0.1" min="0" max="5">
            </div>
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}"> <!-- Lưu user_id của người đánh giá -->
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
@endsection
