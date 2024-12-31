@extends('admin.master')

@section('body')
    <div class="container">
        <h1>Danh sách Sự kiện</h1>
        <a href="{{ route('events.create') }}" class="btn btn-primary mb-3">Thêm sự kiện</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tiêu đề</th>
                    <th>Ngày</th>
                    <th>Thời gian</th>
                    <th>Địa điểm</th>
                    <th>Thuộc đối tượng</th>
                    <th>Nội dung</th>
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
                        <td>{{ $event->target_audience }}</td>
                        {{-- <td>{{ $event->content }}</td> --}}
                        <td>{{ \Illuminate\Support\Str::limit($event->content, 50, '...') }}</td>
                        {{-- <td>{{ $event->description }}</td> --}}
                        <td>{{ \Illuminate\Support\Str::limit($event->description, 50, '...') }}</td>
                        <td>
                            @if($event->image_url)
                                <img src="{{ asset('storage/' . $event->image_url) }}" alt="Event Image" width="100">
                            @else
                                <span>Không có ảnh</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('events.show', $event->id) }}" class="btn btn-info btn-sm" title="Xem chi tiết">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('events.edit', $event->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                            <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
       
    </div>
@endsection
