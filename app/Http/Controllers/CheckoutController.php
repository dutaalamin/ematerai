<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\UserQuota;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function store(Request $request, Product $product)
    {
        // Mockup Midtrans/Payment Gateway Logic
        // In a real scenario, we would call the payment gateway API here and get a payment URL.
        
        $transaction = Transaction::create([
            'user_id' => auth()->id(),
            'product_id' => $product->id,
            'amount' => $product->price,
            'status' => 'paid', // Mocking instant success
            'payment_url' => 'https://mockup-payment-url.com'
        ]);

        // Automatically increase user quota (Mockup)
        $userQuota = UserQuota::firstOrCreate(
            ['user_id' => auth()->id()],
            ['quota_balance' => 0]
        );
        
        $userQuota->increment('quota_balance', $product->quota);

        return redirect()->route('checkout.success')->with('success', 'Pembelian berhasil! Kuota telah ditambahkan.');
    }

    public function success()
    {
        return view('checkout.success');
    }

    

    public function checkoutPage(Request $request)
    {
        $service = $request->query('service', 'emeterai');
        $quantity = (int) $request->query('quantity', 5);
        $unitPrice = 10000;
        $subtotal = $quantity * $unitPrice;

        return view('checkout.page', compact('service', 'quantity', 'unitPrice', 'subtotal'));
    }

    public function buy(Request $request)
    {
        $data = $request->validate([
            'service' => 'required|string',
            'quantity' => 'required|integer|min:1',
            'payment_method' => 'nullable|string'
        ]);

        $unitPrice = 10000; // same unit price
        $amount = $data['quantity'] * $unitPrice;

        $transaction = Transaction::create([
            'user_id' => auth()->id(),
            'product_id' => null,
            'amount' => $amount,
            'status' => 'paid',
            'payment_url' => 'https://mock-payment.example/buy'
        ]);

        if ($data['service'] === 'emeterai') {
            $userQuota = UserQuota::firstOrCreate(
                ['user_id' => auth()->id()],
                ['quota_balance' => 0]
            );
            $userQuota->increment('quota_balance', $data['quantity']);
        }

        if ($data['service'] === 'signature') {
            // currently we reuse the same quota model; in future consider separate model
            $userQuota = UserQuota::firstOrCreate(
                ['user_id' => auth()->id()],
                ['quota_balance' => 0]
            );
            // For now increment same quota as placeholder
            $userQuota->increment('quota_balance', $data['quantity']);
        }

        return redirect()->route('checkout.success')->with('success', 'Pembelian berhasil! Kuota telah ditambahkan.');
    }
}
