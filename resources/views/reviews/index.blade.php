@extends('admin.master')
@section('title', 'Teacher Reviews')
@section('body')
<div class="card">
    <div class="card-header">
        <h4>Teacher Reviews</h4>
        <a href="{{ route('reviews.create') }}" class="btn btn-primary">Add Review</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Teacher</th>
                    <th>Reviewer</th>
                    <th>Rating</th>
                    <th>Review</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reviews as $review)
                    <tr>
                        <td>{{ $review->id }}</td>
                        <td>{{ $review->teacher->name }}</td>
                        <td>{{ $review->user ? $review->user->name : 'Anonymous' }}</td> 
                        <td>{{ $review->rating }}</td>
                        <td>{{ $review->comment }}</td>
                        <td>
                            <a href="{{ route('reviews.edit', $review->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection