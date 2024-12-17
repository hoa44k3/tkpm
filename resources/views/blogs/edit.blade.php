@extends('admin.master')
@section('title', 'Sửa Blog')
@section('body')
<div class="card">
    <div class="card-header">
        <h4>Sửa Blog</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Tên Blog</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $blog->name }}" required>
            </div>
          
            <div class="form-group">
                <label for="image">Hình ảnh</label>
                <input type="file" name="image" class="form-control" id="image">
                @if ($blog->image)
                    <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->name }}" width="100" class="mt-2">
                @endif
            </div>
            {{-- <div class="form-group">
                <label for="comment">Comment</label>
                <textarea class="form-control" id="comment" name="comment">{{ $blog->comment }}</textarea>
            </div>
         --}}
            <div class="form-group">
                <label for="description">Mô tả</label>
                <textarea name="description" class="form-control" id="description" rows="3" required>{{ $blog->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="status">Trạng thái</label>
                <select name="status" id="status" class="form-control">
                    <option value="pending" {{ $blog->status === 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="approved" {{ $blog->status === 'approved' ? 'selected' : '' }}>Approved</option>
                </select>
            </div>

            <div class="form-group">
                <label for="category_id">Danh mục</label>
                <select name="category_id" id="category_id" class="form-control">
                    <option value="">Chọn danh mục</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $blog->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success">Cập nhật</button>
        </form>
    </div>
</div>
@endsection
