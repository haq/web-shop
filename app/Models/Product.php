<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string title
 * @property int price
 * @property int stock
 */
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'stock',
    ];

    protected $hidden = [
        'pivot'
    ];

    public function shoppingCarts()
    {
        return $this->belongsToMany(ShoppingCart::class, 'product_shopping_cart', 'product_id', 'shopping_cart_id');
    }
}
