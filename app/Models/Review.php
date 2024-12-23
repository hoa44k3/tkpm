<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    // Đặt tên bảng nếu không tuân theo quy tắc mặc định
    // protected $table = 'reviews'; 

    // Các thuộc tính có thể gán giá trị (mass assignable)
    protected $fillable = [
        'teacher_id',
        'user_id',
        'rating',
        'comment',
        'reviewer_name',
         'course_id'
    ];
    // Định nghĩa quan hệ với bảng Teacher (nếu có)
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }


    // Định nghĩa quan hệ với bảng User (nếu có)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function course()
    {
        return $this->belongsTo(Courses::class, 'course_id');  // Đảm bảo 'course_id' là khóa ngoại trong bảng reviews
    }
}
