@extends('admin.master')
@section('title', 'Danh Sách Khóa Học')

@section('body')
<div class="card">
    <div class="card-header">
        <h4>Danh Sách Khóa Học</h4>
        <a href="{{ route('courses.create') }}" class="btn btn-primary">Thêm Khóa Học</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tên Giáo viên</th>
                    <th>Ảnh Đại Diện</th>
                    <th>Chức danh</th>
                    <th>Nhóm tuổi</th>
                    <th>Thời gian lớp học</th>
                    <th>Số lượng học viên</th>
                    <th>Học phí</th>
                    <th>Tên khóa học</th>
                    <th>Mô tả khóa học</th>
                    <th>Đánh giá</th>
                    <th>Địa điểm</th>
                    <th>Ảnh Nền</th>
                    <th>Ngày Tạo</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->teacher_name }}</td>
                        <td>
                            @if($course->teacher_avatar)
                                <img src="{{ asset('storage/' . $course->teacher_avatar) }}" alt="Avatar" style="width: 50px; height: 50px; object-fit: cover;">
                            @else
                                <img src="{{ asset('assets/img/default-avatar.jpg') }}" alt="Default Avatar" style="width: 50px; height: 50px; object-fit: cover;">
                            @endif
                        </td>
                        <td>{{ $course->teacher_title }}</td>
                        <td>{{ $course->age_group }}</td>
                        <td>{{ $course->time }}</td>
                        <td>{{ $course->class_size }}</td>
                        <td>${{ $course->fee }}</td>
                        <td>{{ $course->course_title }}</td>
                        <td>{{ $course->description }}</td>   
                        <td>{{ $course->rating }}</td>
                        <td>{{ $course->location }}</td> 
                        <td>
                            @if($course->background_image)
                                <img src="{{ asset('storage/' . $course->background_image) }}" alt="Background Image" style="width: 50px; height: 50px; object-fit: cover;">
                            @else
                                <img src="{{ asset('assets/img/default-background.jpg') }}" alt="Default Background" style="width: 50px; height: 50px; object-fit: cover;">
                            @endif
                        </td>
                        <td>{{ $course->created_at->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning">Sửa</a>
                            <button data-id="{{ $course->id }}" class="btn btn-danger delete-course">Xóa</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

@section('scripts')
<script>
    $('.delete-course').on('click', function() {
        var courseId = $(this).data('id');
        if (confirm('Bạn có chắc chắn muốn xóa khóa học này?')) {
            $.ajax({
                url: '/courses/' + courseId,
                type: 'DELETE',
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function(response) {
                    alert(response.success);
                    location.reload();
                }
            });
        }
    });
</script>
@endsection
