<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewPostNotification;

use App\Models\User;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Postview;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = ['title','slug', 'excerpt', 'body', 'user_id','category_id', 'approved'];
    
    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    } 

    public function category() {
        return $this->belongsTo(Category::class);
    } 

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
    
    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function image() {
        return $this->morphOne(Image::class, 'imageable');
    }
    
    // Mối quan hệ với bảng PostView
    public function views() {
        return $this->hasMany(PostView::class);
    }

    // scope functions
    public function scopeApproved($query){
        return $query->where('approved', 1);
    }

    // Model event to send email when a new post is created
    protected static function booted()
    {
        // static::created(function ($post) {
        //     // Get all subscribers
        //     $subscribers = \App\Models\Newsletter::all();

        //     // Send an email to each subscriber
        //     foreach ($subscribers as $subscriber) {
        //         Mail::to($subscriber->email)->send(new NewPostNotification($post));
        //     }
        // });
        // Kiểm tra khi tạo bài viết mới
        static::created(function ($post) {
            if ($post->approved == 1) {
                // Gửi email cho tất cả subscribers khi bài viết được tạo với approved = 1
                $subscribers = Newsletter::all();
                foreach ($subscribers as $subscriber) {
                    Mail::to($subscriber->email)->send(new NewPostNotification($post));
                }
            }
        });

        // Kiểm tra khi cập nhật bài viết
        static::updated(function ($post) {
            if ($post->approved == 1 && $post->isDirty('approved')) {
                // Gửi email khi bài viết được cập nhật và approved = 1
                $subscribers = Newsletter::all();
                foreach ($subscribers as $subscriber) {
                    Mail::to($subscriber->email)->send(new NewPostNotification($post));
                }
            }
        });
    }

}
