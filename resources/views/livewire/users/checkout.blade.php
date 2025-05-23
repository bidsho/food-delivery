<div class="container mt-5">
    <h2>Checkout</h2>

    @if(session()->has('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Food Name</th>
                <th>Quantity</th>
                <th>Total Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->menu->name }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>#{{ number_format($order->total_price, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h3>Total Amount: #{{ number_format($totalAmount, 2) }}</h3>

    <!-- Paystack Payment Button -->
    <form action="{{ url('/paystack/pay') }}" method="POST">
        @csrf
        <input type="hidden" name="amount" value="{{ $totalAmount }}">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-credit-card"></i> Pay with Paystack
        </button>
    </form>
</div>
