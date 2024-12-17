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
                    <th>Teacher Name</th>
                    <th>Title</th>
                    <th>Age Group</th>
                    <th>Time</th>
                    <th>Class Size</th>
                    <th>Fee</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->teacher_name }}</td>
                        <td>{{ $course->teacher_title }}</td>
                        <td>{{ $course->age_group }}</td>
                        <td>{{ $course->time }}</td>
                        <td>{{ $course->class_size }}</td>
                        <td>${{ $course->fee }}</td>
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
