<?php
namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\Menus;
use App\Models\OrderT; // Import the Order model
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FoodItemPage extends Component
{
    public $food, $quantity = 1, $phone;

    public function mount($id)
    {
        $this->food = Menus::findOrFail($id);
    }

    public function addToCart()
{
    $cart = session()->get('cart', []);

    if (isset($cart[$this->food->id])) {
        $cart[$this->food->id]['quantity'] += $this->quantity;
    } else {
        $cart[$this->food->id] = [
            'name' => $this->food->name,
            'price' => $this->food->price,
            'image' => $this->food->file,
            'quantity' => $this->quantity,
        ];
    }

    session()->put('cart', $cart);

    // Save the order in the database
    if (Auth::check()) {
        OrderT::create([
            'user_id' => Auth::id(),
            'menu_id' => $this->food->id,
            'quantity' => $this->quantity,
            'total_price' => $this->quantity * $this->food->price,
            'status' => 'pending', // Default order status
            'phone' => $this->phone,
        ]);
    }

    // Dispatch event to update cart count
    $this->dispatch('cart-updated', ['count' => count($cart)]);

    session()->flash('success', 'Item added to cart and order created successfully!');
}

    

    public function render()
    {
        return view('livewire.users.food-item-page')->extends('layouts.home');
    }
}
