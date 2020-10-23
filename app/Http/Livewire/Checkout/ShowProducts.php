<?php

namespace App\Http\Livewire\Checkout;

use App\Models\ShoppingCart;
use Livewire\Component;

class ShowProducts extends Component
{
    protected $listeners = ['REMOVED_PRODUCT_FROM_CART' => '$refresh'];

    public function render()
    {
        $cart = ShoppingCart::where(
            [
                'user_id' => auth()->user()->id,
                'completed' => false
            ]
        )->firstOrFail();

        $products = $cart->products;
        $totalPrice = 0;
        foreach ($products as $product) {
            $totalPrice += $product->price;
        }

        return view('livewire.checkout.show-products', [
            'cart' => $cart,
            'products' => $products,
            'total' => $totalPrice,
        ]);
    }
}
