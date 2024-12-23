<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $fillable = [
        'teacher_name',
        'teacher_title',
        'age_group',
        'time',
        'class_size',
        'fee',
        'course_title',
        'description',
        'rating',
    ];
        public function teacherReviews()
    {
        return $this->hasMany(TeacherReview::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class, 'course_id');  // Đảm bảo 'course_id' là tên đúng của khóa ngoại trong bảng reviews
    }
}
