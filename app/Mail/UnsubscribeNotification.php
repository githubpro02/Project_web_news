<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UnsubscribeNotification extends Mailable
{
    use SerializesModels;

    public $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function build()
    {
        return $this->view('emails.unsubscribe_notification')
                    ->with(['email' => $this->email])
                    ->subject('You have unsubscribed from our newsletter');
    }
}
