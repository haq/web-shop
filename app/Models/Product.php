<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string title
 * @property int price
 * @property int inventory_count
 */
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'inventory_count',
    ];

    protected $hidden = [
        'pivot'
    ];

    public function shoppingCarts()
    {
        return $this->belongsToMany('App\Models\ShoppingCart', 'product_shoppingcart', 'product_id', 'shoppingcart_id');
    }
}
