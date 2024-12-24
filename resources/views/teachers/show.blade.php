@extends('admin.master')

@section('body')
<div class="container">
    <h2>Thông tin giáo viên</h2>
    <div class="card">
        <div class="card-header">
            <h4>{{ $teacher->name }}</h4>
            <p class="text-muted">{{ $teacher->title }}</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('storage/' . $teacher->photo) }}" alt="Ảnh giáo viên" class="img-fluid" style="object-fit: cover;">
                </div>
                <div class="col-md-8">
                    <h5>Tiểu sử</h5>
                    <p>{{ $teacher->bio }}</p>

                    <h5>Kinh nghiệm</h5>
                    <p>{{ $teacher->experience_years }} năm</p>

                    <h5>Đánh giá</h5>
                    <p>
                        @if($teacher->reviews_avg_rating)
                            {{ number_format($teacher->reviews_avg_rating, 1) }} / 5
                        @else
                            Chưa có đánh giá
                        @endif
                    </p>

                    <h5>Trạng thái nổi bật</h5>
                    <p>
                        @if($teacher->is_featured)
                            <span class="badge badge-success">Nổi bật</span>
                        @else
                            <span class="badge badge-secondary">Không nổi bật</span>
                        @endif
                    </p>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Quay lại danh sách</a>
            <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-warning">Chỉnh sửa</a>
        </div>
    </div>
</div>
@endsection
