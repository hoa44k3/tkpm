@extends('admin.master')
@section('title', 'Thêm Khóa Học')

@section('body')
<div class="card">
    <div class="card-header">
        <h4>Thêm Khóa Học Mới</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('courses.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="teacher_name">Tên Giáo Viên</label>
                <input type="text" name="teacher_name" class="form-control" id="teacher_name" required>
            </div>
            <div class="form-group">
                <label for="teacher_title">Chức Danh Giáo Viên</label>
                <input type="text" name="teacher_title" class="form-control" id="teacher_title" required>
            </div>
            <div class="form-group">
                <label for="age_group">Nhóm Tuổi</label>
                <input type="text" name="age_group" class="form-control" id="age_group" required>
            </div>
            <div class="form-group">
                <label for="time">Thời Gian</label>
                <input type="text" name="time" class="form-control" id="time" required>
            </div>
            <div class="form-group">
                <label for="class_size">Số Lượng Học Viên</label>
                <input type="number" name="class_size" class="form-control" id="class_size" required>
            </div>
            <div class="form-group">
                <label for="fee">Học Phí</label>
                <input type="text" name="fee" class="form-control" id="fee" required>
            </div>
            <div class="form-group">
                <label for="course_title">Tên Khóa Học</label>
                <input type="text" name="course_title" class="form-control" id="course_title" required>
            </div>
            <div class="form-group">
                <label for="description">Mô Tả</label>
                <textarea name="description" class="form-control" id="description" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="rating">Đánh Giá</label>
                <input type="text" name="rating" class="form-control" id="rating">
            </div>
            <button type="submit" class="btn btn-success">Lưu</button>
        </form>
    </div>
</div>
@endsection
