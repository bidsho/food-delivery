<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\OrderT;
use Illuminate\Support\Facades\Auth;

class CartCounter extends Component
{
    public $orderCount = 0;

    protected $listeners = ['cartUpdated' => 'updateCartCount'];

    public function mount()
    {
        $this->updateCartCount();
    }

    public function updateCartCount()
    {
        if (Auth::check()) {
            $this->orderCount = OrderT::where('user_id', Auth::id())->where('status','pending')->count();
        } else {
            $this->orderCount = 0;
        }
    }

    public function render()
    {
        return view('livewire.cart-counter');
    }
}
