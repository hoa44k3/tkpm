@extends('admin.master')

@section('body')
    <div class="container">
        <h1>Danh sách Sự kiện</h1>
        <a href="{{ route('events.create') }}" class="btn btn-primary">Thêm sự kiện</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Tiêu đề</th>
                    <th>Ngày</th>
                    <th>Thời gian</th>
                    <th>Địa điểm</th>
                    <th>Mô tả</th>
                    <th>Ảnh</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                    <tr>
                        <td>{{ $event->title }}</td>
                        <td>{{ \Carbon\Carbon::parse($event->event_date)->format('d-m-Y') }}</td>
                        <td>{{ $event->start_time }} - {{ $event->end_time }}</td>
                        <td>{{ $event->location }}</td>
                        <td>{{ $event->description }}</td>
                        <td>
                            @if($event->image_url)
                                <img src="{{ asset('storage/' . $event->image_url) }}" alt="Event Image" width="100">
                            @else
                                <span>Không có ảnh</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('events.edit', $event->id) }}" class="btn btn-warning">Sửa</a>
                            <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
