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
                <label for="teacher_avatar">Ảnh Đại Diện Giáo Viên</label>
                <input type="file" name="teacher_avatar" id="teacher_avatar" class="form-control" accept="image/*">
                @if($course->teacher_avatar)
                    <img src="{{ asset('storage/' . $course->teacher_avatar) }}" alt="Avatar" style="width: 50px; height: 50px; object-fit: cover;">
                @endif
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
                <label for="rating">Đánh giá (Từ 1.0 - 5.0)</label>
                <input type="number" step="0.1" name="rating" id="rating" value="{{ $course->rating }}" class="form-control" min="1" max="5" required>
            </div>
            <div class="form-group">
                <label for="location">Địa điểm học</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $course->location ?? '') }}" placeholder="Nhập địa điểm học">
            </div>
            <div class="form-group">
                <label for="background_image">Ảnh Nền</label>
                <input type="file" name="background_image" id="background_image" class="form-control" accept="image/*">
                @if($course->background_image)
                    <img src="{{ asset('storage/' . $course->background_image) }}" alt="Background Image" style="width: 50px; height: 50px; object-fit: cover;">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
</div>
@endsection
