<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $table = 'classes';

    // Các trường được phép điền dữ liệu
    protected $fillable = [
        'class_name',
        'description',
        'age_group',
        'time',
        'class_size',
        'teacher_id',
        'fee',
        'teacher_name',
        'location',
        'image',
    ];

    // Nếu bạn không muốn sử dụng timestamps tự động (created_at, updated_at), bỏ dòng sau
    public $timestamps = true;
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
