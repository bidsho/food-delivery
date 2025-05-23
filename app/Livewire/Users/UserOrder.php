<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\OrderT;
use Illuminate\Support\Facades\Auth;

class UserOrder extends Component
{
    public $orders;

    public function mount()
    {
        // Fetch orders for the authenticated user
        $this->orders = OrderT::where('user_id', Auth::id())->get();
    }

    public function render()
    {
        return view('livewire.users.user-order', [
            'orders' => $this->orders,
        ])->extends('layouts.home')->section('content'); // Ensure it extends the home layout
    }
}
