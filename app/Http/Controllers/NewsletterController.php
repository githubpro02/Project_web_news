<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewsletterRequests\NewsletterRequest;
use App\Models\Newsletter;
use App\Mail\UnsubscribeNotification;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    
    public function store(NewsletterRequest $request)
    {
        return Newsletter::store( $request ); 
    }

    // Phương thức hủy đăng ký
    public function unsubscribe($email)
    {
        $subscriber = Newsletter::where('email', $email)->first();

        if ($subscriber) {
            $subscriber->delete();
            // Thông báo hủy đăng ký thành công
            // Gửi email thông báo hủy đăng ký
            Mail::to($email)->send(new UnsubscribeNotification($email));
            
            // Đặt thông báo vào session để hiển thị thông báo cho người dùng
            session()->flash('message', 'Bạn đã hủy đăng ký nhận thông báo thành công.');
        } else {
            // Nếu không tìm thấy email trong danh sách
            session()->flash('message', 'Email không tìm thấy trong danh sách đăng ký.');
        }

        // Trả lại người dùng về trang trước đó, tức là giữ nguyên trang hiện tại của người dùng
        return redirect()->back();
    }
}
