@extends('admin.master')

@section('body')
    <div class="container">
        <h2>Create New Class</h2>

        <form action="{{ route('classes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="class_name">Class Name</label>
                <input type="text" class="form-control" id="class_name" name="class_name" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>

            <div class="form-group">
                <label for="age_group">Age Group</label>
                <input type="text" class="form-control" id="age_group" name="age_group" required>
            </div>

            <div class="form-group">
                <label for="time">Class Time</label>
                <input type="text" class="form-control" id="time" name="time" required>
            </div>

            <div class="form-group">
                <label for="class_size">Class Size</label>
                <input type="number" class="form-control" id="class_size" name="class_size" required>
            </div>

            <div class="form-group">
                <label for="fee">Fee</label>
                <input type="number" class="form-control" id="fee" name="fee" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="image">Class Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Create Class</button>
        </form>
    </div>
@endsection
