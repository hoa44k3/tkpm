@extends('admin.master')

@section('body')
    <div class="container">
        <h2>Edit Class: {{ $class->class_name }}</h2>

        <form action="{{ route('classes.update', $class->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="class_name">Class Name</label>
                <input type="text" class="form-control" id="class_name" name="class_name" value="{{ old('class_name', $class->class_name) }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" required>{{ old('description', $class->description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="age_group">Age Group</label>
                <input type="text" class="form-control" id="age_group" name="age_group" value="{{ old('age_group', $class->age_group) }}" required>
            </div>

            <div class="form-group">
                <label for="time">Class Time</label>
                <input type="text" class="form-control" id="time" name="time" value="{{ old('time', $class->time) }}" required>
            </div>

            <div class="form-group">
                <label for="class_size">Class Size</label>
                <input type="number" class="form-control" id="class_size" name="class_size" value="{{ old('class_size', $class->class_size) }}" required>
            </div>

            <div class="form-group">
                <label for="fee">Fee</label>
                <input type="number" class="form-control" id="fee" name="fee" step="0.01" value="{{ old('fee', $class->fee) }}" required>
            </div>

            <div class="form-group">
                <label for="teacher_id">Tên giáo viên</label>
                <select class="form-control" id="teacher_id" name="teacher_id">
                    <option value="">Chọn giáo viên</option>
                    @foreach($teachers as $teacher)
                        <option value="{{ $teacher->id }}" {{ old('teacher_id', $class->teacher_id ?? '') == $teacher->id ? 'selected' : '' }}>
                            {{ $teacher->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <label>Địa điểm</label>
                <div>
                    <label><input type="radio" name="location" value="online" {{ old('location', $class->location ?? '') == 'online' ? 'checked' : '' }}> Online</label>
                    <label><input type="radio" name="location" value="offline" {{ old('location', $class->location ?? '') == 'offline' ? 'checked' : '' }}> Offline</label>
                </div>
            </div>
            

            <div class="form-group">
                <label for="image">Class Image</label>
                <input type="file" class="form-control" id="image" name="image">
                @if($class->image)
                    <img src="{{ asset('storage/' . $class->image) }}" alt="Class Image" width="100" class="mt-2">
                @endif
            </div>

            <button type="submit" class="btn btn-warning mt-3">Update Class</button>
        </form>
    </div>
@endsection
