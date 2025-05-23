<div class="container py-5">
    <div class="card shadow-lg border-0 rounded-3">
        <div class="card-body">
            <h2 class="text-center text-primary fw-bold">My Orders</h2>
            <p class="text-center text-muted">Track your recent orders and payment status.</p>

            @if ($orders->isEmpty())
                <div class="alert alert-info text-center">You have no orders yet.</div>
            @else
                <div class="table-responsive">
                    <table class="table table-hover table-bordered align-middle">
                        <thead class="table-primary">
                            <tr>
                               
                                <th>Item</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $index => $order)
                                <tr>
                                    
                                    <td>{{ $order->menu->name }}</td>
                                    <td class="fw-bold text-success">₦{{ number_format($order->menu->price, 2) }}</td>
                                    <td>
                                        @if($order->status=='paid')
                                        <a href="{{url('/users/success-ful-paid/'.$order->payment_reference)}}">
                                        <span class="badge 
                                            {{ $order->status === 'paid' ? 'bg-success' : 'bg-success' }}">
                                            {{ ucfirst($order->status) }}
                                        </span>
                                        </a>
                                        
                                        @else
                                        <a href="{{url('/users/cart-page')}}">
                                        <span class="badge 
                                            {{ $order->status === 'paid' ? 'bg-success' : 'bg-danger' }}">
                                            {{ ucfirst($order->status) }}
                                        </span>
                                        </a>


                                        @endif
                                    </td>
                                    <td>{{ $order->created_at->format('d M, Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</div>
