<?php
namespace App\Livewire\Users;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\OrderT;
use App\Models\PhoneNumber;

class SuccessFulPaid extends Component
{
    public $orders;
    public $totalAmount;
    public $paymentReference; // ✅ Add paymentReference

    public function mount($reference = null)
    {
        $this->paymentReference = $reference; // ✅ Store payment reference

        // ✅ Fetch only paid orders with the same payment reference
        $this->orders = OrderT::where('user_id', Auth::id())
            ->where('payment_reference', $this->paymentReference)
            ->with('menu')
            ->get();

        // ✅ Calculate total amount paid
        $this->totalAmount = $this->orders->sum('total_price');
    }

    public function render()
    {
        $phone=PhoneNumber::get();
        return view('livewire.users.success-ful-paid', [
            'orders' => $this->orders,
            'totalAmount' => $this->totalAmount,
            'phone'=>$phone,
            'paymentReference' => $this->paymentReference, // ✅ Pass to view
        ])->extends('layouts.home')->section('content');
    }
}
