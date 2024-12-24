@extends('admin.master')

@section('body')
    <div class="container">
        <h1>{{ $event->title }}</h1>
        <div class="event-details">
            <div class="row">
                <div class="col-md-8">
                    <img src="{{ asset('storage/' . $event->image_url) }}" class="img-fluid" alt="{{ $event->title }}">
                </div>
                <div class="col-md-4">
                    <h3>Thông tin sự kiện</h3>
                    <p><strong>Ngày:</strong> {{ \Carbon\Carbon::parse($event->event_date)->format('d F, Y') }}</p>
                    <p><strong>Thời gian:</strong> {{ \Carbon\Carbon::parse($event->start_time)->format('g:i a') }} - 
                        {{ \Carbon\Carbon::parse($event->end_time)->format('g:i a') }}</p>
                    <p><strong>Địa điểm:</strong> {{ $event->location }}</p>
                    <p><strong>Mô tả:</strong> {{ $event->description }}</p>
                </div>
            </div>
        </div>
        <a href="{{ route('events.index') }}" class="btn btn-primary">Quay lại danh sách sự kiện</a>
    </div>
@endsection
