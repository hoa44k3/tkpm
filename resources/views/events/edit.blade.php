@extends('admin.master')

@section('body')
    <div class="container">
        <h1>Sửa sự kiện</h1>
        <form action="{{ route('events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Tiêu đề -->
            <div class="form-group">
                <label for="title">Tiêu đề</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $event->title) }}" required>
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Mô tả -->
            <div class="form-group">
                <label for="description">Mô tả</label>
                <textarea class="form-control" id="description" name="description" required>{{ old('description', $event->description) }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Ngày -->
            <div class="form-group">
                <label for="event_date">Ngày</label>
                <input type="date" class="form-control" id="event_date" name="event_date" value="{{ old('event_date', $event->event_date) }}" required>
                @error('event_date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Thời gian bắt đầu -->
            <div class="form-group">
                <label for="start_time">Thời gian bắt đầu</label>
                <input type="time" class="form-control" id="start_time" name="start_time" value="{{ old('start_time', $event->start_time) }}" required>
               
            </div>

            <!-- Thời gian kết thúc -->
            <div class="form-group">
                <label for="end_time">Thời gian kết thúc</label>
                <input type="time" class="form-control" id="end_time" name="end_time" value="{{ old('end_time', $event->end_time) }}" required>
            </div>

            <!-- Địa điểm -->
            <div class="form-group">
                <label for="location">Địa điểm</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $event->location) }}" required>
                @error('location')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="target_audience">Thuộc đối tượng</label>
                <textarea class="form-control" id="target_audience" name="target_audience" required>{{ old('target_audience', $event->target_audience) }}</textarea>
                @error('target_audience')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Nội dung -->
            <div class="form-group">
                <label for="content">Nội dung</label>
                <textarea class="form-control" id="content" name="content" required>{{ old('content', $event->content) }}</textarea>
                @error('content')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <!-- Ảnh minh họa -->
            <div class="form-group">
                <label for="image_url">Ảnh minh họa</label>
                <input type="file" class="form-control" id="image_url" name="image_url">
                @if($event->image_url)
                    <img src="{{ asset('storage/' . $event->image_url) }}" width="100" alt="Event Image">
                @endif
                @error('image_url')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Cập nhật sự kiện</button>
        </form>
    </div>
@endsection
