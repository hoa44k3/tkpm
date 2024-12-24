@extends('admin.master')

@section('body')
<div class="container">
    <h2>Danh sách giáo viên</h2>
    <a href="{{ route('teachers.create') }}" class="btn btn-primary mb-3">Thêm giáo viên</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Ảnh</th>
                <th>Tên</th>
                <th>Chức danh</th>
                <th>Tiểu sử</th> 
                <th>Kinh nghiệm</th>
                <th>Đánh giá</th>
                <th>Nổi bật</th> 
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->id }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $teacher->photo) }}" alt="Ảnh" width="50" height="50" style="object-fit: cover;">
                    </td>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->title }}</td>
                    <td>{{ $teacher->bio }}</td> 
                    <td>{{ $teacher->experience_years }} năm</td>
                    <td>
                        @if($teacher->reviews_avg_rating)
                            {{ number_format($teacher->reviews_avg_rating, 1) }} / 5
                        @else
                            Chưa có đánh giá
                        @endif
                    </td>
                    <td>
                        @if($teacher->is_featured)
                            <span class="badge badge-success">Nổi bật</span>
                        @else
                            <span class="badge badge-secondary">Không nổi bật</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('teachers.show', $teacher->id) }}" class="btn btn-info btn-sm" title="Xem chi tiết">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-warning">Sửa</a>
                        <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Xác nhận xóa?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
