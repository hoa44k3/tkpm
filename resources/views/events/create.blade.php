@extends('admin.master')

@section('body')
    <div class="container">
        <h1>Thêm sự kiện mới</h1>
        <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Tiêu đề</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Mô tả</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="event_date">Ngày</label>
                <input type="date" class="form-control" id="event_date" name="event_date" required>
            </div>
            <div class="form-group">
                <label for="start_time">Thời gian bắt đầu</label>
                <input type="time" class="form-control" id="start_time" name="start_time" required>
            </div>
            <div class="form-group">
                <label for="end_time">Thời gian kết thúc</label>
                <input type="time" class="form-control" id="end_time" name="end_time" required>
            </div>
            <div class="form-group">
                <label for="location">Địa điểm</label>
                <input type="text" class="form-control" id="location" name="location" required>
            </div>
            <div class="form-group">
                <label for="target_audience">Thuộc đối tượng</label>
                <textarea class="form-control" id="target_audience" name="target_audience" required></textarea>
            </div>

            <!-- Nội dung -->
            <div class="form-group">
                <label for="content">Nội dung</label>
                <textarea class="form-control" id="content" name="content" required></textarea>
            </div>
            <div class="form-group">
                <label for="image_url">Ảnh minh họa</label>
                <input type="file" class="form-control" id="image_url" name="image_url">
            </div>
            <button type="submit" class="btn btn-success">Tạo sự kiện</button>
        </form>
    </div>
@endsection
