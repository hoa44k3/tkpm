<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherReview extends Model
{
    use HasFactory;
    protected $fillable = [
        'courses_id',
        'student_name',
        'rating',
        'review',
    ];

    // Quan hệ với bảng Courses
    public function course()
    {
        return $this->belongsTo(Courses::class);
    }
}
