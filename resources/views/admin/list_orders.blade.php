@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <!-- Success Message -->
    @if(Session::has('suc'))
    <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
        {{ Session::get('suc') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Orders Summary</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @foreach($orders as $date => $dailyOrders)
                <h5 class="text-info mt-3">Date: {{ $date }}</h5>
                <table class="table table-bordered table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>Name</th>
                            <th>User Name</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Amount</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $dailyTotal = 0;
                        @endphp
                        @foreach($dailyOrders as $order)
                        @php
                            $orderTotal = $order->menu->price * $order->quantity;
                            $dailyTotal += $orderTotal;
                        @endphp
                        <tr>
                            <td>{{ $order->menu->name }}</td>
                            <td>{{ $order->user->name }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>{{ $order->status }}</td>
                            <td>${{ number_format($orderTotal, 2) }}</td>
                            <td class="text-center">
                                <a href="{{ url('/admin/view_order/'.$order->id) }}" class="btn btn-info btn-sm">
                                    <i class="fas fa-eye"></i> View Order
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        <!-- Display Daily Total -->
                        <tr class="table-info">
                            <td colspan="3"><strong>Total for {{ $date }}:</strong></td>
                            <td><strong>${{ number_format($dailyTotal, 2) }}</strong></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
