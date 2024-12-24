@extends('admin.master')

@section('body')
    <div class="container">
        <h2>{{ $class->class_name }}</h2>
        <div class="class-details">
            <img src="{{ asset('storage/' . $class->image) }}" alt="{{ $class->class_name }}" class="img-fluid">
            <p>{{ $class->description }}</p>
            <ul>
                <li><strong>Age Group:</strong> {{ $class->age_group }}</li>
                <li><strong>Time:</strong> {{ $class->time }}</li>
                <li><strong>Class Size:</strong> {{ $class->class_size }}</li>
                <li><strong>Fee:</strong> ${{ number_format($class->fee, 2) }}</li>
            </ul>
        </div>
    </div>
@endsection
