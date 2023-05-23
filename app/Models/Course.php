<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class)->withDefault();
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
    public function order_items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
