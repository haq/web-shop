<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int user_id
 * @property boolean completed
 */
class ShoppingCart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'completed'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function products()
    {
        return $this->belongsToMany('App\Models\Product', 'product_shoppingcart', 'shoppingcart_id', 'product_id');
    }
}
