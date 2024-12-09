<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Post;
use App\Models\Category;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function posts() {
        return $this->belongsToMany(Post::class);
    }

}
