<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\EmailNotification;

class UserNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $notify; // Make user data accessible in the view

    /**
     * Create a new message instance.
     */
    public function __construct(EmailNotification $notify)
    {
        $this->notify = $notify;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->view('emails.user_notification') // Blade view for email content
                    ->subject($this->notify->subject) // Pass the subject dynamically
                    ->with([
                        'subject' => $this->notify->subject,
                        'bodyOne' => $this->notify->body_one,
                        'bodyTwo' => $this->notify->body_two,
                    ]);
    }
}
