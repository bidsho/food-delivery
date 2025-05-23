<div class="flex items-center justify-center min-h-screen bg-gradient-to-br from-green-50 to-gray-100 p-6">
    <div class="bg-white shadow-2xl rounded-2xl p-10 text-center w-full max-w-lg md:max-w-2xl">
        <!-- ✅ Title & Message -->
        <h1 class="text-4xl font-bold text-gray-900 mt-6">Payment Successful!</h1>
        <p class="text-gray-600 mt-3 text-lg leading-relaxed">
            Thank you for your order. Your payment has been processed successfully.
        </p>

        <!-- ✅ Transaction Details -->
        <div class="mt-8 space-y-4 text-left">
            <div class="flex items-center justify-between bg-blue-50 border border-blue-300 p-4 rounded-lg shadow-sm">
                <strong class="text-blue-800">Transaction Reference:</strong>
                <span class="text-blue-700 font-semibold">{{ $paymentReference }}</span>
            </div>

            <div class="flex items-center justify-between bg-green-50 border border-green-300 p-4 rounded-lg shadow-sm">
                <strong class="text-green-800">Total Paid:</strong>
                <span class="text-green-700 font-semibold">₦{{ number_format($totalAmount, 2) }}</span>
            </div>
        </div>

        <!-- ✅ Ordered Items List -->
        <div class="mt-8">
            <h2 class="text-2xl font-semibold text-gray-800">Order Summary</h2>
            <ul class="mt-4 space-y-3">
                @foreach($orders as $order)
                    <li class="flex justify-between bg-gray-100 p-4 rounded-lg shadow-md text-lg">
                        <span class="text-gray-700 font-medium">{{ $order->menu->name }}</span>
                        <span class="text-gray-900 font-semibold">₦{{ number_format($order->menu->price, 2) }}</span>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- ✅ Contact Information -->
        <div class="mt-8 bg-yellow-50 border border-yellow-300 p-5 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold text-yellow-800">Need Help with Delivery?</h3>
            <p class="text-yellow-700 mt-2">
                Call us at: 
                @foreach($phone as $phones)
                <a href="tel:{{$phones->phone}}" class="text-blue-600 font-semibold underline">+234 {{$phones->phone}}</a>
                @endforeach
            </p>
            <p class="text-yellow-700">We will update you with your food location.</p>
        </div>

        <!-- ✅ CTA Button -->
        <div class="mt-10">
            <a href="{{ route('dashboard') }}" class="px-8 py-3 bg-green-600 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 transition-all duration-300 transform hover:scale-105">
                Go to Dashboard
            </a>
        </div>
    </div>
</div>
