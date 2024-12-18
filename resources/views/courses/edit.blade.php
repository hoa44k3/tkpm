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
                <label for="teacher_name">Tên Giáo viên</label>
                <input type="text" name="teacher_name" id="teacher_name" value="{{ $course->teacher_name }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="teacher_title">Chức danh</label>
                <input type="text" name="teacher_title" id="teacher_title" value="{{ $course->teacher_title }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="age_group">Nhóm tuổi</label>
                <input type="text" name="age_group" id="age_group" value="{{ $course->age_group }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="time">Thời gian lớp học</label>
                <input type="text" name="time" id="time" value="{{ $course->time }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="class_size">Số lượng học viên</label>
                <input type="number" name="class_size" id="class_size" value="{{ $course->class_size }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="fee">Học phí</label>
                <input type="number" step="0.01" name="fee" id="fee" value="{{ $course->fee }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="course_title">Tên khóa học</label>
                <input type="text" name="course_title" id="course_title" value="{{ $course->course_title }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Mô tả khóa học</label>
                <textarea name="description" id="description" class="form-control" required>{{ $course->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="rating">Đánh giá</label>
                <input type="number" step="0.1" name="rating" id="rating" value="{{ $course->rating }}" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
</div>
@endsection
