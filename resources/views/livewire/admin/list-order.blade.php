<div class="container mt-5">
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="text-primary mb-0">Orders Summary</h4>
    
    <div class="d-flex align-items-center">
        <label for="searchDate" class="me-2 fw-bold">Filter by Date:</label>
        <div class="input-group">
            <input type="date" wire:model.blur="searchDate" class="form-control border-primary rounded-start">
            <button class="btn btn-primary" type="button">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
</div>


    <div class="card shadow-lg">
        <div class="card-body">
            <div class="table-responsive">
                @forelse($orders as $date => $dailyOrders)
                    <h5 class="text-info mt-3">Date: {{ $date }}</h5>
                    <table class="table table-bordered table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>User Name</th>
                                <th>Quantity</th>
                                <th>Status</th>
                                <th>Amount</th>
                                <th>Phone Number</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $dailyTotal = 0; @endphp
                            @foreach($dailyOrders as $order)
    @php
        $orderTotal = $order['menu']['price'] * $order['quantity'];
        $dailyTotal += $orderTotal;
    @endphp
    <tr>
        <td>{{ $order['id'] ?? 'N/A' }}</td>
        <td>{{ $order['menu']['name'] ?? 'N/A' }}</td>
        <td>{{ $order['user']['name'] ?? 'N/A' }}</td>
        <td>{{ $order['quantity'] }}</td>
        <td>
            <span class="badge {{ $order['status'] === 'paid' ? 'bg-success' : 'bg-danger' }}">
                {{ ucfirst($order['status']) }}
            </span>
        </td>

        <td>₦{{ number_format($orderTotal, 2) }}</td>
        <td>{{ $order['phone'] }}</td>
        <td class="text-center">
            <a href="{{ url('/admin/view_order/'.$order['id']) }}" class="btn btn-info btn-sm">
                <i class="fas fa-eye"></i> View
            </a>
        </td>
        
    </tr>
@endforeach

                            <!-- Daily Total -->
                            <tr class="table-warning">
                                <td colspan="6"><strong>Total for {{ $date }}:</strong></td>
                                <td><strong>₦{{ number_format($dailyTotal, 2) }}</strong></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                @empty
                    <p class="text-center text-muted">No orders found for the selected date.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
