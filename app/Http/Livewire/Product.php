<?php

namespace App\Http\Livewire;

use App\Models\ShoppingCart;
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
        return view('livewire.product');
    }

    public function addToCart($product)
    {
        $this->emit('SHOW_NOTIFICATION', 'message', 'Post successfully updated.');
        /*exit();

        $user = auth()->user();
        $cart = ShoppingCart::firstOrCreate(
            [
                'user_id' => $user->id,
                'completed' => false
            ]
        );

        // checking if the product exists
        $product = Product::findOrFail($product);

        // checking if the product is out of stock
        if ($product->inventory_count == 0) {
            // TODO: send notification back
            return response()->json([
                'message' => 'Product out of stock.'
            ], 409);
        }

        // checking if this cart already contains this product
        foreach ($cart->products()->get() as $prod) { // TODO: use sql to write query
            if ($prod->id == $product->id) {
                // TODO: send notification back
                return response()->json([
                    'message' => 'This cart already contains this product.'
                ], 409);
            }
        }

        // adding the product to the cart
        $cart->products()->attach($product->id);
        $cart->save();

        // TODO: send notification back
        return response()->json([
            'message' => 'Product added to cart.'
        ], 200);*/
    }
}
