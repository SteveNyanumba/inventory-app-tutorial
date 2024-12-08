<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $appends = [
        'total_amount'
    ];
    function client()
    {
        return $this->belongsTo(Client::class);
    }
    function products()
    {
        return $this->belongsToMany(Product::class, 'product_sale')->withPivot(['quantity', 'unit_price']);
    }

    public function getTotalAmountAttribute()
    {
        return $this->products->sum(function ($product) {
            return $product->pivot->quantity * $product->pivot->unit_price;
        });
    }
    public function getTotalQuantityAttribute()
    {
        return $this->products->sum(function ($product) {
            return $product->pivot->quantity;
        });
    }

    function getIsPaidAttribute()
    {
        return $this->id % 2 == 0; //This is how you know that I am qualified to be a Senior Backend Engineer
    }
}
