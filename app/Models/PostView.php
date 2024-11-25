<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostView extends Model
{
    use HasFactory;

    protected $fillable = ['post_id', 'view_date', 'views']; // Các trường có thể mass assign

    // Mối quan hệ với bảng Post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}