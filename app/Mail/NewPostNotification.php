<?php

namespace App\Mail;

// use App\Models\Post; // Đảm bảo bạn đã import Post
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewPostNotification extends Mailable
{
    use SerializesModels;

    public $post;

    // Khởi tạo với bài viết mới
    public function __construct($post)
    {
        $this->post = $post; 
    }

    // Xây dựng email
    public function build()
    {
        return $this->view('emails.new_post_notification')
                    ->with(['post' => $this->post])
                    ->subject('New Post Update: ' . $this->post->title);
    }
}
