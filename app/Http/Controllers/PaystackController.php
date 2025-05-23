<?php

namespace App\Http\Controllers;
use App\Mail\SendEmailNotificationForOrder;
use App\Models\OrderT;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Services\PaystackService;
use Illuminate\Http\Request;

class PaystackController extends Controller
{
    protected $paystackService;

    public function __construct(PaystackService $paystackService)
    {
        $this->paystackService = $paystackService;
    }

    /**
     * Initiate Paystack Payment
     */
    public function initiatePayment(Request $request)
    {
        // ✅ Generate a unique payment reference
        $paymentReference = 'TXN_' . uniqid(); 

        // ✅ Store order details in the database with the payment reference
        OrderT::where('status','pending')->where('user_id',Auth::user()->id)->update([
            
            'payment_reference' => $paymentReference,
           
        ]);
       

        // ✅ Prepare Paystack API request data
        $data = [
            'email' => auth()->user()->email,
            'amount' => $request->amount * 100, // Convert to kobo
            'callback_url' => route('paystack.callback'),
            'reference' => $paymentReference, // ✅ Attach reference
        ];

        // ✅ Send payment request to Paystack
        $payment = $this->paystackService->initializePayment($data);

        \Log::info('Paystack Response:', $payment); // Log response

        if (!isset($payment['status']) || !$payment['status']) {
            return back()->with('error', 'Paystack API error: ' . ($payment['message'] ?? 'Unknown error.'));
        }

        if (isset($payment['data']['authorization_url'])) {
            return redirect($payment['data']['authorization_url']);
        }

        return back()->with('error', 'Unable to process payment. Please try again.');
    }

    /**
     * Handle Paystack Payment Callback
     */
    public function handleCallback(Request $request)
    {
        // ✅ Verify payment with Paystack
        $payment = $this->paystackService->verifyPayment($request->reference);

        if ($payment['status'] && $payment['data']['status'] === 'success') {
            // ✅ Find the order by payment reference
            $orders = OrderT::where('user_id', Auth::id())
                ->where('payment_reference', $request->reference)
                ->get();

            if ($orders->isEmpty()) {
                return redirect('/uuuf')->with('error', 'Orders not found.');
            }

            // ✅ Update order status to "paid"
            foreach ($orders as $order) {
                $order->status = 'paid';
                $order->save();
            }
            Mail::to('asspipweb@gmail.com')->send(new SendEmailNotificationForOrder($orders));

            // ✅ Redirect to success page with reference
            return redirect()->route('success.payment', ['reference' => $request->reference])
                ->with('success', 'Payment successful. All orders updated.');
        }

        return redirect('/uuu')->with('error', 'Payment failed.');
    }
}
