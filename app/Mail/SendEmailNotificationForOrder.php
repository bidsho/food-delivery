<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Models\OrderT;
use Illuminate\Queue\SerializesModels;

class SendEmailNotificationForOrder extends Mailable
{
    use Queueable, SerializesModels;

    public $orders;

    public function __construct($orders)
    {
        $this->orders = $orders;
    }

    public function build()
    {
        return $this->subject('New Order Payment Received')
                    ->view('emails.order_notification')
                    ->with(['orders' => $this->orders]);
    }
}
