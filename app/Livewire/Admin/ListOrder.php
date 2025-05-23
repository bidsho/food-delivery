<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\OrderT;
use Carbon\Carbon;

class ListOrder extends Component
{
    public $searchDate;
    public $orders;

    public function mount()
    {
        $this->fetchOrders();
    }

    public function updatedSearchDate()
    {
        $this->fetchOrders();
    }

    public function fetchOrders()
    {
        $query = OrderT::with(['menu', 'user'])
            ->orderBy('created_at', 'desc');
    
        if ($this->searchDate) {
            $query->whereDate('created_at', $this->searchDate); // Apply filter before fetching
        }
    
        // Fetch orders and group them by date
        $this->orders = $query->get()->groupBy(function ($order) {
            return Carbon::parse($order->created_at)->format('Y-m-d');
        })->map(fn($group) => $group->toArray())->toArray(); // Convert each group to an array
    }
    
    
    

    public function render()
    {
        return view('livewire.admin.list-order')->extends('layouts.admin')->section('content');
    }
}
