<?php

namespace App\Http\Livewire;

use App\Models\ShoppingCart;
use Livewire\Component;

class ShowCartButton extends Component
{
    protected $listeners = [
        'ADDED_PRODUCT_TO_CART' => '$refresh',
        'REMOVED_PRODUCT_FROM_CART' => '$refresh',
    ];

    public function render()
    {
        $cart = ShoppingCart::where(
            [
                'user_id' => auth()->user()->id,
                'completed' => false
            ]
        );

        return view('livewire.show-cart-button', [
            'count' => $cart->exists() ? $cart->first()->products()->count() : 0,
        ]);
    }
}
