<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Mail\SendEmailNotificationForOrder;
use App\Models\OrderT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Services\PaystackService;

class PaystackController extends Controller
{
    protected $paystackService;

    public function __construct(PaystackService $paystackService)
    {
        $this->paystackService = $paystackService;
    }

    /**
     * Initiate Paystack Payment (API)
     */
    public function initiatePayment(Request $request)
    {
        if (!Auth::check()) {
            return response()->json([
                'status' => false,
                'message' => 'User not authenticated',
            ], 401);
        }

        // ✅ Validate input
        $request->validate([
            'amount' => 'required|numeric|min:1',
        ]);

        // ✅ Generate unique payment reference
        $paymentReference = 'TXN_' . uniqid();

        // ✅ Store order details with the payment reference
        OrderT::where('status', 'pending')
            ->where('user_id', Auth::id())
            ->update(['payment_reference' => $paymentReference]);

        // ✅ Prepare Paystack API request data
        $data = [
            'email' => auth()->user()->email,
            'amount' => $request->amount * 100, // Convert to kobo
            'callback_url' => route('api.paystack.callback'),
            'reference' => $paymentReference, // ✅ Attach reference
        ];

        // ✅ Send payment request to Paystack
        $payment = $this->paystackService->initializePayment($data);

        if (!isset($payment['status']) || !$payment['status']) {
            return response()->json([
                'status' => false,
                'message' => 'Paystack API error: ' . ($payment['message'] ?? 'Unknown error.'),
            ], 500);
        }

        return response()->json([
            'status' => true,
            'message' => 'Payment initialized successfully',
            'payment_url' => $payment['data']['authorization_url'], // ✅ Return the payment URL
            'reference' => $paymentReference,
        ]);
    }

    /**
     * Handle Paystack Payment Callback (API)
     */
    public function handleCallback(Request $request)
    {
        // ✅ Verify payment with Paystack
        $payment = $this->paystackService->verifyPayment($request->reference);

        if ($payment['status'] && $payment['data']['status'] === 'success') {
            // ✅ Find orders with the payment reference
            $orders = OrderT::where('user_id', Auth::id())
                ->where('payment_reference', $request->reference)
                ->get();

            if ($orders->isEmpty()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Orders not found.',
                ], 404);
            }

            // ✅ Update order status to "paid"
            foreach ($orders as $order) {
                $order->status = 'paid';
                $order->save();
            }

            // ✅ Send email notification
            Mail::to('asspipweb@gmail.com')->send(new SendEmailNotificationForOrder($orders));

            return response()->json([
                'status' => true,
                'message' => 'Payment successful. Orders updated.',
                'orders' => $orders,
                'reference' => $request->reference,
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'Payment verification failed.',
        ], 400);
    }
}
