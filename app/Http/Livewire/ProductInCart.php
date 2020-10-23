<?php

namespace App\Http\Livewire;

use App\Models\ShoppingCart;
use DB;
use Livewire\Component;

class ProductInCart extends Component
{
    public $cart, $product;

    public function mount(ShoppingCart $cart, \App\Models\Product $product)
    {
        $this->cart = $cart;
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.product-in-cart');
    }

    public function removeFromCart()
    {

        // checking the cart does not contain the product
        if (!DB::table('product_shoppingcart')
            ->where('shoppingcart_id', $this->cart->id)
            ->where('product_id', $this->product->id)
            ->exists()) {
            $this->emit('SHOW_NOTIFICATION', 'error', 'This cart does not contain this product.');
            return;
        }

        // removing product from the cart
        $this->cart->products()->detach($this->product->id);
        $this->cart->save();

        $this->emit('SHOW_NOTIFICATION', 'success', 'Product removed from cart.');
    }
}
