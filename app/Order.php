<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        "user_id", "product_name", "qty",
        "price", "total",
        "paid", "delivered"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
