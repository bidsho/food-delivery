<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;

class PaystackService
{
    protected $paystackSecret;

    public function __construct()
    {
        $this->paystackSecret = config('services.paystack.secret');
    }

    public function initializePayment($data)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . trim($this->paystackSecret), // Ensure no spaces
            'Content-Type'  => 'application/json',
        ])->post('https://api.paystack.co/transaction/initialize', $data);

        return $response->json();
    }

    public function verifyPayment($reference)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->paystackSecret,
            'Content-Type'  => 'application/json',
        ])->get("https://api.paystack.co/transaction/verify/{$reference}");

        return $response->json();
    }
}
