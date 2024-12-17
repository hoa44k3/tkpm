<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'status'];

    // Nếu không sử dụng timestamps (created_at, updated_at)
    public $timestamps = false;

  
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

}
