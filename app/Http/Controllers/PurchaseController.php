<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PurchaseController extends Controller
{
    public function emeterai()
    {
        // Mock products for display (in real app load from DB)
        $products = Product::all();
        return view('purchase.emeterai', compact('products'));
    }

    public function signature()
    {
        $products = Product::all();
        return view('purchase.signature', compact('products'));
    }
}
