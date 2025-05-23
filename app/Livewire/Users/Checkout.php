<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\OrderT;
use Illuminate\Support\Facades\Auth;

class Checkout extends Component
{
    public $orders, $totalAmount;

    public function mount()
    {
        $this->orders = OrderT::where('user_id', Auth::id())->where('status', 'pending')->get();
        $this->totalAmount = $this->orders->sum('total_price');
    }

    public function placeOrder()
    {
        // Update order status to completed
        foreach ($this->orders as $order) {
            $order->update(['status' => 'completed']);
        }

        session()->flash('success', 'Your order has been placed successfully!');
        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.users.checkout')->extends('layouts.home');
    }
}
