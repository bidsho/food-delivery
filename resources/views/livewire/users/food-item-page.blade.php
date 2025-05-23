<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('uploads/' . $food->file) }}" class="img-fluid rounded shadow" alt="{{ $food->name }}">
        </div>
        <div class="col-md-6">
            <h1 class="fw-bold">{{ $food->name }}</h1>
            <p class="text-muted">{{ $food->description }}</p>
            <h3 class="text-primary">#{{ number_format($food->price, 2) }}</h3>
            <p><strong>Ingredients:</strong> {{ $food->ingredients }}</p>

            <!-- Quantity Selector -->
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" wire:model="quantity" id="quantity" min="1" class="form-control w-25">
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Phone Number</label>
                <input type="number" wire:model="phone" id="quantity" min="1" max="11" class="form-control w-25">
            </div>

            <!-- Add to Cart Button -->
            <button wire:click="addToCart" class="btn btn-success">
                <i class="fas fa-shopping-cart"></i> Add to Cart
            </button>

            <!-- Success Message -->
            @if (session()->has('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif

            <!-- JavaScript to listen for the event -->
            <script>
                window.addEventListener('cart-updated', event => {
                    alert('Item added to cart successfully!');
                    location.reload(); // Reload to show flash message properly
                });
            </script>
        </div>
    </div>
</div>
