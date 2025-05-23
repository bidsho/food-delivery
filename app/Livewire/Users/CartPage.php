<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\OrderT;
use App\Models\Menus;
use Illuminate\Support\Facades\Auth;

class CartPage extends Component
{
    public $orders;

    public function mount()
    {
        $this->loadCart();
    }

    public function loadCart()
    {
        if (Auth::check()) {
            $this->orders = OrderT::where('user_id', Auth::id())->where('status','pending')->with('menu')->get();
        } else {
            $this->orders = [];
        }
    }

    public function removeFromCart($orderId)
    {
        OrderT::where('id', $orderId)->where('user_id', Auth::id())->delete();
        $this->loadCart();
        session()->flash('success', 'Item removed from cart!');
    }

    public function checkout()
    {
        if (count($this->orders) > 0) {
            foreach ($this->orders as $order) {
                $order->update(['status' => 'pending']);
            }
            session()->flash('success', 'Order placed successfully!');
            return redirect('users/checkout');
        } else {
            session()->flash('error', 'No items in cart to checkout.');
        }
    }

    public function render()
    {
        return view('livewire.users.cart-page')->extends('layouts.home');
    }
}
