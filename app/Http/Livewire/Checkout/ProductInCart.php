<?php

namespace App\Http\Livewire\Checkout;

use App\Models\Product;
use App\Models\ShoppingCart;
use DB;
use Livewire\Component;

class ProductInCart extends Component
{
    public $cart, $product;

    public function mount(ShoppingCart $cart, Product $product)
    {
        $this->cart = $cart;
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.checkout.product-in-cart');
    }

    public function removeFromCart()
    {
        // checking the cart does not contain the product
        if (!DB::table('product_shopping_cart')
            ->where('shopping_cart_id', $this->cart->id)
            ->where('product_id', $this->product->id)
            ->exists()) {
            $this->emit('SHOW_NOTIFICATION', 'error', 'This cart does not contain this product.');
            return;
        }

        // removing product from the cart
        $this->cart->products()->detach($this->product->id);
        $this->cart->save();

        $this->emit('SHOW_NOTIFICATION', 'success', 'Product removed from cart.');
        $this->emit('REMOVED_PRODUCT_FROM_CART');
    }
}
