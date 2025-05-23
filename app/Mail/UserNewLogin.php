<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use App\Models\User;
use Illuminate\Queue\SerializesModels;

class UserNewLogin extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this->subject('New Login')
                    ->view('emails.user_new_login')
                    ->with([
                         'name' => $this->user->name,
                        // Add any other user details here
                    ]);
    }
}
