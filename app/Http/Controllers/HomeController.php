<?php

namespace App\Http\Controllers;

use App\Models\ShoppingCart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function checkout(Request $request)
    {
        $cart = ShoppingCart::where(
            [
                'user_id' => $request->user()->id,
                'completed' => false
            ]
        )->firstOrFail();

        $products = $cart->products;
        $totalPrice = 0;
        foreach ($products as $product) {
            $totalPrice += $product->price;
        }

        return view('checkout', [
            'cart' => $cart,
            'products' => $products,
            'total' => $totalPrice,
        ]);
    }
}
