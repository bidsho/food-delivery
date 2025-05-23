<?php

namespace App\Livewire\Users;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactAdmin; // Create this mail class

class UserContact extends Component
{
    public $name;
    public $email;
    public $message;

    public function sendEmail()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|min:10',
        ]);

        // Send the email
        Mail::to('admin@example.com')->send(new ContactAdmin($this->name, $this->email, $this->message));

        // Reset form fields
        $this->reset();

        session()->flash('success', 'Your message has been sent successfully!');
    }

    public function render()
    {
        return view('livewire.users.user-contact')->extends('layouts.home')->section('content');
    }
}
