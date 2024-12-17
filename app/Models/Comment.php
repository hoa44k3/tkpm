<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['content','blog_id','user_id'];
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

    // Quan hệ nhiều-một với Customer
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
