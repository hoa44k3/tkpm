@extends('admin.master')

@section('body')
<div class="container">
    <h2>Thêm giáo viên</h2>
    <form action="{{ route('teachers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Tên giáo viên</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="title">Chức danh</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="bio">Tiểu sử</label>
            <textarea name="bio" id="bio" class="form-control" rows="4"></textarea>
        </div>
        <div class="form-group">
            <label for="photo">Ảnh giáo viên</label>
            <input type="file" name="photo" id="photo" class="form-control">
        </div>
        <div class="form-group">
            <label for="experience_years">Kinh nghiệm (năm)</label>
            <input type="number" name="experience_years" id="experience_years" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="is_featured">Nổi bật</label>
            <input type="checkbox" name="is_featured" id="is_featured" {{ old('is_featured', $teacher->is_featured ?? false) ? 'checked' : '' }}>
        </div>
        
        <button type="submit" class="btn btn-success">Lưu</button>
    </form>
</div>
@endsection
