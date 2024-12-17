@extends('admin.master')
@section('title', 'Sửa Khóa Học')

@section('body')
<div class="card">
    <div class="card-header">
        <h4>Sửa Khóa Học</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('courses.update', $course->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="teacher_name">Tên Giáo Viên</label>
                <input type="text" name="teacher_name" class="form-control" id="teacher_name" value="{{ $course->teacher_name }}" required>
            </div>
            <div class="form-group">
                <label for="teacher_title">Chức Danh Giáo Viên</label>
                <input type="text" name="teacher_title" class="form-control" id="teacher_title" value="{{ $course->teacher_title }}" required>
            </div>
            <div class="form-group">
                <label for="age_group">Nhóm Tuổi</label>
                <input type="text" name="age_group" class="form-control" id="age_group" value="{{ $course->age_group }}" required>
            </div>
            <div class="form-group">
                <label for="time">Thời Gian</label>
                <input type="text" name="time" class="form-control" id="time" value="{{ $course->time }}" required>
            </div>
            <div class="form-group">
                <label for="class_size">Số Lượng Học Viên</label>
                <input type="number" name="class_size" class="form-control" id="class_size" value="{{ $course->class_size }}" required>
            </div>
            <div class="form-group">
                <label for="fee">Học Phí</label>
                <input type="text" name="fee" class="form-control" id="fee" value="{{ $course->fee }}" required>
            </div>
            <div class="form-group">
                <label for="course_title">Tên Khóa Học</label>
                <input type="text" name="course_title" class="form-control" id="course_title" value="{{ $course->course_title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Mô Tả</label>
                <textarea name="description" class="form-control" id="description" rows="3" required>{{ $course->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="rating">Đánh Giá</label>
                <input type="text" name="rating" class="form-control" id="rating" value="{{ $course->rating }}">
            </div>
            <button type="submit" class="btn btn-success">Cập Nhật</button>
        </form>
    </div>
</div>
@endsection
