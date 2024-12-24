<?php

namespace App\Mail;

// use App\Models\Post; // Đảm bảo bạn đã import Post
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewPostNotification extends Mailable
{
    use SerializesModels;

    public $post;
    public $subscriber;

    // Khởi tạo với bài viết mới
    public function __construct($post, $subscriber)
    {
        $this->post = $post; 
        $this->subscriber = $subscriber;
    }

    // Xây dựng email
    public function build()
    {
        return $this->view('emails.new_post_notification')
                    ->with(['post' => $this->post,
                    'unsubscribeUrl' => route('unsubscribe', ['email' => $this->subscriber->email])])
                    ->subject('New Post Update: ' . $this->post->title);
    }
}
