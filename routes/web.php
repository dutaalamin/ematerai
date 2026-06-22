<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('products.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\StampingController;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Ematerai Routes (Requires Login)
    Route::post('/checkout/{product}', [CheckoutController::class, 'store'])->name('checkout.store');
    Route::get('/checkout', [\App\Http\Controllers\CheckoutController::class, 'checkoutPage'])->name('checkout.page');
    Route::post('/checkout/buy', [\App\Http\Controllers\CheckoutController::class, 'buy'])->name('checkout.buy');
    Route::get('/purchase/emeterai', [\App\Http\Controllers\PurchaseController::class, 'emeterai'])->name('purchase.emeterai');
    Route::get('/purchase/signature', [\App\Http\Controllers\PurchaseController::class, 'signature'])->name('purchase.signature');
    Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');
    
    Route::get('/stamping', [StampingController::class, 'index'])->name('stamping.index');
    Route::post('/stamping', [StampingController::class, 'store'])->name('stamping.store');
});

// Public Routes
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

require __DIR__.'/auth.php';
