<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'title',
        'bio',
        'photo',
        'experience_years',
    ];
   

    // Định nghĩa quan hệ với bảng Review
    public function reviews()
    {
        return $this->hasMany(Review::class, 'teacher_id');
    }
}
