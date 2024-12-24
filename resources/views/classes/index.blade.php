@extends('admin.master')

@section('body')

    <div class="container">
        <h2>Danh sách lớp học</h2>
        <a href="{{ route('classes.create') }}" class="btn btn-primary mb-3">Thêm lớp học mới</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tên lớp học</th>
                    <th>Mô tả lớp</th>
                    <th>Nhóm tuổi</th>
                    <th>Thời gian</th>
                    <th>Số lượng học viên</th>
                    <th>Học phí</th>
                    <th>Tên giáo viên</th>
                    <th>Địa điểm</th>
                    <th>Trạng thái</th>
                    <th>Hình ảnh</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($classes as $class)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $class->class_name }}</td>
                        <td>{{ \Illuminate\Support\Str::words($class->description, 10, '...') }}</td>
                        <td>{{ $class->age_group }}</td>
                        <td>{{ $class->time }}</td>
                        <td>{{ $class->class_size }}</td>
                        <td>${{ number_format($class->fee, 2) }}</td>
                        <td>
                            @if($class->teacher)
                                <a href="{{ route('teachers.show', $class->teacher->id) }}">{{ $class->teacher->name }}</a>
                            @else
                                <span>Chưa có giáo viên</span>
                            @endif
                        </td>
                        <td>
                            @if($class->location == 'online')
                                <span class="badge bg-info">Online</span>
                            @else
                                <span class="badge bg-secondary">Offline</span>
                            @endif
                        </td>
                        <td>
                            @if($class->status)
                                <span class="badge bg-success">Đang mở</span>
                            @else
                                <span class="badge bg-danger">Đã đóng</span>
                            @endif
                        </td>
                        <td>
                            @if($class->image)
                                <img src="{{ asset('storage/' . $class->image) }}" alt="Class Image" width="100px" height="100px" style="object-fit: cover;">
                            @else
                                <span>Không có ảnh</span>
                            @endif
                        </td>
                        <td class="action-buttons">
                            <a href="{{ route('classes.edit', $class->id) }}" class="btn btn-warning">Sửa</a>
                            <form action="{{ route('classes.destroy', $class->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
