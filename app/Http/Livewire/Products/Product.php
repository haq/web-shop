<?php

namespace App\Http\Livewire\Products;

use App\Models\ShoppingCart;
use DB;
use Livewire\Component;

class Product extends Component
{
    public $product;

    public function mount(\App\Models\Product $product)
    {
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.products.product');
    }

    public function addToCart($product)
    {
        $user = auth()->user();
        $cart = ShoppingCart::firstOrCreate(
            [
                'user_id' => $user->id,
                'completed' => false
            ]
        );

        // checking if the product exists
        $product = \App\Models\Product::findOrFail($product);

        // checking if the product is out of stock
        if ($product->inventory_count == 0) {
            $this->emit('SHOW_NOTIFICATION', 'error', 'Product out of stock.');
            return;
        }

        // checking if this cart already contains this product
        if (DB::table('product_shoppingcart')
            ->where('shoppingcart_id', $cart->id)
            ->where('product_id', $product->id)
            ->exists()) {
            $this->emit('SHOW_NOTIFICATION', 'error', 'This cart already contains this product.');
            return;
        }

        // adding the product to the cart
        $cart->products()->attach($product->id);
        $cart->save();

        $this->emit('SHOW_NOTIFICATION', 'success', 'Product added to cart.');
    }
}
