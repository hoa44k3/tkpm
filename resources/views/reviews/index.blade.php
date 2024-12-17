@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Teacher Reviews</h1>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('reviews.create', ['course' => $courses->id]) }}" class="btn btn-primary mb-3">Add Review</a>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Rating</th>
                    <th>Review</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reviews as $review)
                    <tr>
                        <td>{{ $review->student_name }}</td>
                        <td>{{ $review->rating }}</td>
                        <td>{{ $review->review }}</td>
                        <td>
                            <a href="{{ route('reviews.edit', ['review' => $review->id]) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('reviews.destroy', ['review' => $review->id]) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
