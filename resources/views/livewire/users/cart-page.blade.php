<div class="container mt-5">
    <h2>Your Cart</h2>

    @if(session()->has('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(count($orders) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Food Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->menu->name }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>#{{ number_format($order->menu->price, 2) }}</td>
                        <td>#{{ number_format($order->total_price, 2) }}</td>
                        <td>
                            <button wire:click="removeFromCart({{ $order->id }})" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash"></i> Remove
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-end">
            <button wire:click="checkout" class="btn btn-primary">
                <i class="fas fa-credit-card"></i> Proceed to Checkout
            </button>
        </div>
    @else
        <p class="text-muted">Your cart is empty.</p>
    @endif
</div>
