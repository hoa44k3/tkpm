@extends('admin.master')

@section('body')
    <div class="container">
        <h1>{{ $event->title }}</h1>
        <div class="event-details">
            <div class="row">
                <!-- Hình ảnh sự kiện -->
                <div class="col-md-8">
                    @if ($event->image_url)
                        <img src="{{ asset('storage/' . $event->image_url) }}" class="img-fluid" alt="{{ $event->title }}">
                    @else
                        <p>Không có hình ảnh</p>
                    @endif
                </div>

                <!-- Thông tin sự kiện -->
                <div class="col-md-4">
                    <h3>Thông tin sự kiện</h3>
                    <p><strong>Ngày:</strong> {{ \Carbon\Carbon::parse($event->event_date)->format('d F, Y') }}</p>
                    <p><strong>Thời gian:</strong> {{ \Carbon\Carbon::parse($event->start_time)->format('g:i a') }} - 
                        {{ \Carbon\Carbon::parse($event->end_time)->format('g:i a') }}</p>
                    <p><strong>Địa điểm:</strong> {{ $event->location }}</p>
                    <p><strong>Mô tả:</strong> {{ $event->description }}</p>
                    <p><strong>Đối tượng mục tiêu:</strong> {{ $event->target_audience }}</p>
                </div>
            </div>

            <!-- Nội dung sự kiện -->
            <div class="row mt-4">
                <div class="col-md-12">
                    <h3>Nội dung sự kiện</h3>
                    <p>{!! nl2br(e($event->content)) !!}</p>
                </div>
            </div>
        </div>

        <!-- Nút quay lại -->
        <a href="{{ route('events.index') }}" class="btn btn-primary mt-3">Quay lại danh sách sự kiện</a>
    </div>
@endsection
