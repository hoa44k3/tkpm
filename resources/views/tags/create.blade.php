@extends('admin.master')
@section('title', 'Create Dish')
@section('body')
<div class="card">
    <div class="card-header">
        <h4>Thêm thẻ</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('tags.store') }}" method="POST"enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Tên Thẻ Tag:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Nhập tên thẻ tag" required>
            </div>
          
            <div class="form-group">
                <label for="blog_id">Chọn Bài Viết:</label>
                <select name="blog_id" id="blog_id" class="form-control" required>
                    <option value="">-- Chọn Bài Viết --</option>
                    @foreach ($blogs as $blog)
                        <option value="{{ $blog->id }}">{{ $blog->name }} (ID: {{ $blog->id }})</option>
                    @endforeach
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Lưu</button>
            <a href="{{ route('tags.index') }}" class="btn btn-secondary">Quay lại</a>
        </form>
    </div>        
</div>
@endsection
