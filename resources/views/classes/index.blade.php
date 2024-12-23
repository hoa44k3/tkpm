@extends('admin.master')

@section('body')
    <div class="container">
        <h2>Lớp học</h2>
        <a href="{{ route('classes.create') }}" class="btn btn-primary mb-3">Add New Class</a>

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
                    <th>Hình ảnh</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($classes as $class)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $class->class_name }}</td>
                        <td>{{ $class->description }}</td>
                        <td>{{ $class->age_group }}</td>
                        <td>{{ $class->time }}</td>
                        <td>{{ $class->class_size }}</td>
                        <td>${{ $class->fee }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $class->image) }}" alt="Class Image"width="100px">
                        </td>
                        <td>
                            <a href="{{ route('classes.edit', $class->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('classes.destroy', $class->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
