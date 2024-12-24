@extends('admin.master')
@section('title', 'Blog Manager')
@section('body')

<div class="card">
    <div class="card-header">
        <h4>Danh sách blog</h4>
        <a href="{{ route('blogs.create') }}" class="btn btn-primary mb-3">Thêm Blog</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên blog</th>
                        <th>Hình ảnh</th>
                        <th>Thẻ</th>
                        <th>Mô tả</th>
                        <th>Comment</th> 
                        <th>Danh mục</th>
                        <th>Trạng thái</th>
                        <th>Lượt xem</th>
                        <th>Ngày tạo</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                        <tr>
                            <td>{{ $blog->id }}</td>
                            <td>{{ $blog->name }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->name }}" width="100px">
                            </td>
                            <td>
                                @foreach ($blog->tags as $tag)
                                    <span class="badge bg-primary">{{ $tag->name }}</span>
                                @endforeach
                            </td>
                            <td>{{ $blog->description }}</td>
                            <td>
                                @forelse ($blog->comments as $comment)
                                    <p>{{ $comment->content }}</p>
                                @empty
                                    <p>Chưa có bình luận</p>
                                @endforelse
                            </td>
                            
                            <td>{{ $blog->category ? $blog->category->name : 'Chưa phân loại' }}</td>
                            <td>{{ ucfirst($blog->status) }}</td>
                            <td>{{ $blog->view_count }}</td>
                            <td>{{ $blog->created_at->format('d-m-Y') }}</td>
                            <td>
                                <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-info btn-sm" title="Xem chi tiết">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-warning btn-sm" title="Sửa">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" class="d-inline delete-form" title="Xóa">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
